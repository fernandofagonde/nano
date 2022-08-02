@extends('layouts.layout-1')

@section('title', 'Clientes')

@section('content')
    @component('components.page-header')
        @slot('title', 'Clientes')

        @component('components.create-btn')
            @slot('route', 'clientes.create')
            @slot('title', 'Criar cliente')
        @endcomponent
    @endcomponent

    <!-- Filters -->
    @component('components.filters')
        @slot('route', 'clientes.index')

        @component('components.filter-input')
            @slot('label', 'Nome/Login')
            @slot('name', 'nome')
            @slot('value', $filters['nome'])
        @endcomponent

        @component('components.filter-select')
            @slot('label', 'Ativo')
            @slot('name', 'ativo')
            @slot('items', ['T' => 'Todos', 'S' => 'Sim', 'N' => 'Não'])
            @slot('selected_item', $filters['ativo'])
        @endcomponent
    @endcomponent
    <!-- / Filters -->

    @component('components.grid')
        <table class="table table-striped table-bordered table-hover card-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Endereço</th>             
                <th>Criado em</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefone_formatado }}</td>
                    <td>{{ $cliente->endereco }}</td>                    
                    <td>{{ $cliente->dt_criacao_formatado }}</td>
                    <td class="cell-nowrap">
                        @component('components.edit-btn')
                            @slot('route', 'clientes.edit')
                            @slot('route_params', ['id' => $cliente->id])
                        @endcomponent

                        @component('components.destroy-btn')
                            @slot('route', 'clientes.destroy')
                            @slot('route_params', ['id' => $cliente->id])
                        @endcomponent
                        @component('components.eye-btn')                            
                            @slot('href',env('APP_URL').'/'.$cliente->url)
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">
                        {{ config('app.messages.grid.no_rows') }}
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>

        @slot('pagination', $clientes->appends($filters)->links())
    @endcomponent
@endsection
