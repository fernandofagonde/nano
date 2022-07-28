<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Models\Clientes;

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

        if (!$form_data['senha']) {
            unset($form_data['senha']);
        }

        $cliente = $this->clientes->findOrFail($id);
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
}
