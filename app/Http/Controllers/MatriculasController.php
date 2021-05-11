<?php

namespace App\Http\Controllers;

use App\Http\Requests\PapeisRequest;
use App\Models\Papeis;
use App\Models\Grupos;
use App\Models\Pessoas;

class MatriculasController extends Controller
{
    /**
     * @var Matriculas
     */
    private $matriculas;

    public function __construct(Matriculas $matriculas)
    {
        $this->matriculas = $matriculas;
    }

    public function index()
    {
        $rows_per_page = config('app.pagination.rows_per_page');

        $filters = [
            'nome' => request('nome', ''),
        ];

        $query = $this->papeis->newQuery();

        if ($filters['nome']) {
            $query->where('nome', 'like', '%' . $filters['nome'] . '%');
        }

        $query->orderBy('id', 'desc');

        $papeis = $query->paginate($rows_per_page);

        return view('papeis.index', compact('papeis', 'filters'));
    }

    public function create()
    {
        $papel = new Papeis();
        $is_edit = false;

        return view('papeis.create', compact('papel', 'is_edit'));
    }

    public function store(PapeisRequest $request)
    {
        $papel = $this->papeis->fill($request->all());
        $papel->save();

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.insert'),
        ]);

        return redirect()->route('papeis.index');
    }

    public function edit($id)
    {
        $papel = $this->papeis->findOrFail($id);
        $is_edit = true;

        return view('papeis.edit', compact('papel', 'is_edit'));
    }

    public function update(PapeisRequest $request, $id)
    {
        $papel = $this->papeis->findOrFail($id);
        $papel->update($request->all());

        session()->flash('notice', [
            'type' => 'success',
            'message' => config('app.messages.actions.update'),
        ]);

        return redirect()->route('papeis.index');
    }

    public function destroy($id)
    {
        $papel = $this->papeis->findOrFail($id);
        $papel->delete();

        return response()->json([
            'success' => true,
            'redirect_to' => route('papeis.index')
        ]);
    }
}
