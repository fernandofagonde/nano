@extends('layouts.layout-1')

@section('title', 'Editando cliente - Clientes')

@section('content')
    @component('components.page-header')
        @slot('title')
            Editando cliente <span class="text-muted">#{{ $cliente->id }}</span>
        @endslot
    @endcomponent

    <form action="{{ route('clientes.update', ['id' => $cliente->id]) }}" method="post">
        @method('put')
        @csrf

        @include('cliente._form')
    </form>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('form').submit(function () {
                $('input:disabled').prop('disabled', false);
            });
        });
    </script>
@endpush
