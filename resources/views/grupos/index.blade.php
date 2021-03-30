@extends('layouts.layout-1')

@section('title', 'Grupos')

@section('content')
    @component('components.page-header')
        @slot('title', 'Grupos')

        @component('components.create-btn')
            @slot('route', 'grupos.create')
            @slot('title', 'Criar grupo')
        @endcomponent
    @endcomponent

    <!-- Filters -->
    @component('components.filters')
        @slot('route', 'grupos.index')

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
            @forelse($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->id }}</td>
                    <td>{{ $grupo->nome }}</td>
                    <td>{{ $grupo->descricao }}</td>
                    <td>{{ dia_da_semana($grupo->dia_semana) }}</td>
                    <td>{{ $grupo->hora_inicio }}</td>
                    <td>{{ $grupo->hora_fim }}</td>
                    <td class="cell-nowrap">
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
