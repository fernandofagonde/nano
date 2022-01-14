<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoasRequest;
use App\Models\Pessoas;

class PessoasController extends Controller
{
    /**
     * @var Pessoas
     */
    private $pessoas;

    public function __construct(Pessoas $pessoas)
    {
        $this->pessoas = $pessoas;
    }

    public function index()
    {
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'nome' => request('nome', ''),
            'ativo' => request('ativo', 'T'),
        ];

        $query = $this->pessoas->newQuery();

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

        $pessoas = $query->paginate($rows_per_page);

        return view('pessoas.index', compact('pessoas', 'filters'));
    }

    public function create()
    {
        $pessoa = new Pessoas();
        $is_edit = false;

        return view('pessoas.create', compact('pessoa', 'is_edit'));
    }

    public function store(PessoasRequest $request)
    {
        $pessoa = $this->pessoas->fill($request->all());
        $pessoa->save();

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return redirect()->route('pessoas.index');
    }

    public function edit($id)
    {
        $pessoa = $this->pessoas->findOrFail($id);
        $is_edit = true;

        return view('pessoas.edit', compact('pessoa', 'is_edit'));
    }

    public function update(PessoasRequest $request, $id)
    {
        $form_data = $request->all();

        if (!$form_data['senha']) {
            unset($form_data['senha']);
        }

        $pessoa = $this->pessoas->findOrFail($id);
        $pessoa->update($form_data);

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.update'),
        ]);

        return redirect()->route('pessoas.index');
    }

    public function destroy($id)
    {
        $pessoa = $this->pessoas->findOrFail($id);
        $pessoa->delete();

        return response()->json([
            'success' => true,
            'redirect_to' => route('pessoas.index')
        ]);
    }
}
