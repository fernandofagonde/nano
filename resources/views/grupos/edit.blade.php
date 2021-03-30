@extends('layouts.layout-1')

@section('title', 'Editando grupo - Grupos')

@section('content')
    @component('components.page-header')
        @slot('title')
            Editando grupo <span class="text-muted">#{{ $grupo->id }}</span>
        @endslot
    @endcomponent

    <form action="{{ route('grupos.update', ['id' => $grupo->id]) }}" method="post">
        @method('put')
        @csrf

        @include('grupos._form')
    </form>
@endsection
