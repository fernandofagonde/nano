@extends('layouts.layout-1')

@section('title', 'Editando papel - Papéis')

@section('content')
    @component('components.page-header')
        @slot('title')
            Editando papel <span class="text-muted">#{{ $papel->id }}</span>
        @endslot
    @endcomponent

    <form action="{{ route('papeis.update', ['id' => $papel->id]) }}" method="post">
        @method('put')
        @csrf

        @include('papeis._form')
    </form>
@endsection
