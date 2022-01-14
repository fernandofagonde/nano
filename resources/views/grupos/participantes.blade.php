@extends('layouts.layout-1')

@section('title', 'Participantes')

@section('content')
    @component('components.page-header')
        @slot('title', 'Participantes')

        @component('components.create-btn')
            @slot('route', 'grupos/2/adicionarParticipantes/')
            @slot('title', 'Adicionar Participante')
        @endcomponent
    @endcomponent

    <!-- Filters -->
    @component('components.filters')
        

        @component('components.filter-input')
            @slot('label', 'Buscar participante')
            @slot('name', 'nome')
            @slot('value', $filters['nome'])
        @endcomponent
    @endcomponent
    <!-- / Filters -->

    @component('components.grid')
        <table class="table table-striped table-bordered table-hover card-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Papel</th>                
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->id }}</td>
                    <td>{{ $grupo->nome }}</td>
                    <td>{{ $grupo->descricao }}</td>
                    <td class="cell-nowrap">
                        @component('components.people-btn')
                        @slot('route', 'grupos.participantes')
                        @slot('route_params', ['id' => $grupo->id])
                        @endcomponent

                        @component('components.edit-btn')
                            @slot('route', 'grupos.edit')
                            @slot('route_params', ['id' => $grupo->id])
                        @endcomponent                        

                        @component('components.destroy-btn')
                            @slot('route', 'grupos.destroy')
                            @slot('route_params', ['id' => $grupo->id])
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        {{ config('app.messages.grid.no_rows') }}
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>

        @slot('pagination', $grupos->appends($filters)->links())
    @endcomponent
@endsection
