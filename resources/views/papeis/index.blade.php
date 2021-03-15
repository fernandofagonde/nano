@extends('layouts.layout-1')

@section('title', 'Papéis')

@section('content')
    @component('components.page-header')
        @slot('title', 'Papéis')

        @component('components.create-btn')
            @slot('route', 'papeis.create')
            @slot('title', 'Criar papel')
        @endcomponent
    @endcomponent

    <!-- Filters -->
    @component('components.filters')
        @slot('route', 'papeis.index')

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
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($papeis as $papel)
                <tr>
                    <td>{{ $papel->id }}</td>
                    <td>{{ $papel->nome }}</td>
                    <td class="cell-nowrap">
                        @component('components.edit-btn')
                            @slot('route', 'papeis.edit')
                            @slot('route_params', ['id' => $papel->id])
                        @endcomponent

                        @component('components.destroy-btn')
                            @slot('route', 'papeis.destroy')
                            @slot('route_params', ['id' => $papel->id])
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

        @slot('pagination', $papeis->appends($filters)->links())
    @endcomponent
@endsection
