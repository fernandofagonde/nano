<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipantesRequest;
use App\Models\Participantes;

class ParticipantesController extends Controller
{
    /**
     * @var Participantes
     */
    private $participantes;

    public function __construct(Participantes $participantes)
    {
        $this->participantes = $participantes;
    }

    public function index()
    {
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'nome' => request('nome', ''),
        ];

        $query = $this->participantes->newQuery();

        if ($filters['nome']) {
            $query->where('nome', 'like', '%' . $filters['nome'] . '%');
        }

        $query->orderBy('id', 'desc');

        $participantes = $query->paginate($rows_per_page);

        return view('participantes.index', compact('participantes', 'filters'));
    }

    public function create()
    {
        $grupo = new Participantes();
        $is_edit = false;

        return view('participantes.create', compact('grupo', 'is_edit'));
    }

    public function store(ParticipantessRequest $request)
    {
        $grupo = $this->participantes->fill($request->all());
        $grupo->save();

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return redirect()->route('participantes.index');
    }

    public function edit($id)
    {
        $grupo = $this->participantes->findOrFail($id);
        $is_edit = true;

        return view('participantes.edit', compact('grupo', 'is_edit'));
    }

    public function update(ParticipantesRequest $request, $id)
    {
        $grupo = $this->participantes->findOrFail($id);
        $grupo->update($request->all());

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.update'),
        ]);

        return redirect()->route('participantes.index');
    }

    public function destroy($id)
    {
        $grupo = $this->participantes->findOrFail($id);
        $grupo->delete();

        return response()->json([
            'success' => true,
            'redirect_to' => route('participantes.index')
        ]);
    }
}
