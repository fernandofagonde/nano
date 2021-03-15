@extends('layouts.layout-1')

@section('title', 'Criando papel - Papéis')

@section('content')
    @component('components.page-header')
        @slot('title', 'Criando papel')
    @endcomponent

    <form action="{{ route('papeis.store') }}" method="post">
        @csrf

        @include('papeis._form')
    </form>
@endsection
