@extends('layouts.layout-1')

@section('title', 'Participantes')

@section('content')
    @component('components.page-header')
        @slot('title', 'Participantes')

        @component('components.create-btn')
            @slot('route', 'participantes.create')
            @slot('title', 'Criar participante')
        @endcomponent
    @endcomponent

    <!-- Filters -->
    @component('components.filters')
        @slot('route', 'participantes.index')

        @component('components.filter-input')
            @slot('label', 'Nome')
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
                <th>Descrição</th>
                <th>Dia da Semana</th>
                <th>Hora de início</th>
                <th>Hora de fim</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($participantes as $participante)
                <tr>
                    <td>{{ $participante->id }}</td>
                    <td>{{ $participante->nome }}</td>
                    <td>{{ $participante->descricao }}</td>
                    <td>{{ dia_da_semana($participante->dia_semana) }}</td>
                    <td>{{ $participante->hora_inicio }}</td>
                    <td>{{ $participante->hora_fim }}</td>
                    <td class="cell-nowrap">
                        @component('components.people-btn')
                            @slot('route', 'participantes.index')
                            @slot('route_params', ['id' => $participante->id])
                        @endcomponent

                        @component('components.edit-btn')
                            @slot('route', 'participantes.edit')
                            @slot('route_params', ['id' => $participante->id])
                        @endcomponent                        

                        @component('components.destroy-btn')
                            @slot('route', 'participantes.destroy')
                            @slot('route_params', ['id' => $participante->id])
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

        @slot('pagination', $participantes->appends($filters)->links())
    @endcomponent
@endsection
