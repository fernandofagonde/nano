<?php

namespace App\Http\Controllers;

use App\Http\Requests\GruposRequest;
use App\Models\Grupos;
use App\Models\Pessoas;
use App\Models\GruposPessoas;

class GruposController extends Controller
{
    /**
     * @var Grupos
     */
    private $grupos;
    private $pessoas;
    private $gruposPessoas;

    public function __construct(Grupos $grupos, Pessoas $pessoas)
    {
        $this->grupos = $grupos;   
        $this->pessoas = $pessoas;     
    }

    public function index()
    {
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'nome' => request('nome', ''),
        ];

        $query = $this->grupos->newQuery();

        if ($filters['nome']) {
            $query->where('nome', 'like', '%' . $filters['nome'] . '%');
        }

        $query->orderBy('id', 'desc');

        $grupos = $query->paginate($rows_per_page);

        return view('grupos.index', compact('grupos', 'filters'));
    }

    public function create()
    {
        $grupo = new Grupos();
        $is_edit = false;

        return view('grupos.create', compact('grupo', 'is_edit'));
    }

    public function store(GruposRequest $request)
    {
        $grupo = $this->grupos->fill($request->all());
        $grupo->save();

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return redirect()->route('grupos.index');
    }

    public function edit($id)
    {
        $grupo = $this->grupos->findOrFail($id);
        $is_edit = true;

        return view('grupos.edit', compact('grupo', 'is_edit'));
    }

    public function update(GruposRequest $request, $id)
    {
        $grupo = $this->grupos->findOrFail($id);
        $grupo->update($request->all());

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.update'),
        ]);

        return redirect()->route('grupos.index');
    }

    public function destroy($id)
    {
        $grupo = $this->grupos->findOrFail($id);
        $grupo->delete();

        return response()->json([
            'success' => true,
            'redirect_to' => route('grupos.index')
        ]);
    }

    public function participantes($grupo_id)
    {

        $grupo = Grupos::find(8);
        
        foreach($grupo->papeis as $pessoa) {
            dump($pessoa);
            echo $pessoa->nome;
        }
        
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'nome' => request('nome', ''),            
        ];

        $query = $this->pessoas->newQuery();
        
        if ($filters['nome']) {
            $query->where(function ($subquery) use ($filters) {
                $subquery->where('nome', 'like', '%' . $filters['nome'] . '%');                
            });
        }

        $query->orderBy('id', 'desc');

        $pessoas = $query->paginate($rows_per_page);

        dd($pessoas);
        
        $grupo = $this->grupos->with('pessoas')->find($grupo_id);        
        
        return view("grupos.participantes", compact('grupo', 'pessoas', 'filters'));
    }

    public function adicionarParticipantes($id)
    {
        $gruposPessoas = $this->gruposPessoas->find($id);
        $is_edit = false;        

        return view('grupos.adicionarParticipantes', compact('gruposPessoas', 'is_edit'));
    }
}
