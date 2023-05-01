<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Models\Clientes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ClientesController extends Controller
{
    /**
     * @var Clientes
     */
    private $clientes;

    public function __construct(Clientes $clientes)
    {
        $this->clientes = $clientes;
    }

    public function index()
    {
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'nome' => request('nome', ''),
            'ativo' => request('ativo', 'T'),
        ];

        $query = $this->clientes->newQuery();

        if ($filters['nome']) {
            $query->where(function ($subquery) use ($filters) {
                $subquery->where('nome', 'like', '%' . $filters['nome'] . '%');
                $subquery->orWhere('login', 'like', '%' . $filters['nome'] . '%');
            });
        }

        if ($filters['ativo'] != 'T') {
            $query->where('ativo', $filters['ativo'] == 'S' ? 't' : 'f');
        }

        $query->orderBy('id', 'desc');

        $clientes = $query->paginate($rows_per_page);

        return view('clientes.index', compact('clientes', 'filters'));
    }

    public function create()
    {
        $cliente = new Clientes();
        $is_edit = false;

        return view('clientes.create', compact('cliente', 'is_edit'));
    }

    public function store(ClientesRequest $request)
    {
        
        $cliente = $this->clientes->fill($request->all());

        if ($request->logo || $request->fundo) {
            $imagens = $this->imageUpload($request);
            if ($imagens['logo']) {
                $cliente->logo = $imagens['logo'];
            }
            if ($imagens['fundo']) {
                $cliente->fundo = $imagens['fundo'];
            }
        }

        $cliente->save();
        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        $cliente = $this->clientes->findOrFail($id);
        $is_edit = true;

        return view('clientes.edit', compact('cliente', 'is_edit'));
    }

    public function update(ClientesRequest $request, $id)
    {

        $form_data = $request->all();

        $cliente = $this->clientes->findOrFail($id);

        if ($request->logo || $request->fundo) {
            $imagens = $this->imageUpload($request);
            if (isset($imagens['logo'])) {
                $form_data['logo'] = $imagens['logo'];
            }
            if (isset($imagens['fundo'])) {
                $form_data['fundo'] = $imagens['fundo'];
            }
        }

        $cliente->update($form_data);

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.update'),
        ]);

        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $cliente = $this->clientes->findOrFail($id);
        $cliente->delete();

        return response()->json([
            'success' => true,
            'redirect_to' => route('clientes.index')
        ]);
    }

    public function imageUpload($request)
    {

        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $nome_logo = 'logo_' . Str::slug($request->get('nome')) . '_' . Str::random(8) . '.' . $logo->getClientOriginalExtension();
            Storage::disk('local')->put('public/' . Str::slug($request->get('url')) . '/' . $nome_logo, file_get_contents($logo),  'public');
            $directory = storage_path('app/public/' . Str::slug($request->get('url')));            
            Storage::disk('local')->setVisibility($directory, 'public');                        
            $imagens['logo'] = $nome_logo;
        }

        if ($request->file('fundo')) {
            $fundo = $request->file('fundo');
            $nome_fundo = 'fundo_' . Str::slug($request->get('nome')) . '_' . Str::random(8) . '.' . $fundo->getClientOriginalExtension();
            Storage::disk('local')->put('public/' . Str::slug($request->get('url')) . '/' . $nome_fundo, file_get_contents($fundo), 'public');
            $directory = storage_path('app/public/' . Str::slug($request->get('url')));
            Storage::disk('local')->setVisibility($directory, 'public');            
            $imagens['fundo'] = $nome_fundo;
        }
        chmod($directory, 0755);
        return ($imagens);
    }


    /**
     * Aqui mostra o conteúdo/
     *    */
    public function public($cliente)
    {
        $clientes = new Clientes();
        $cliente = $clientes->where('url', '=', $cliente)->first();
        $cliente->whatsapp = so_numero($cliente->whatsapp);

        return view('clientes.public', compact('cliente'));
    }
}
