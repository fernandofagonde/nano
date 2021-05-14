@extends('layouts.layout-1')

@section('title', 'Criando grupo - Grupos')

@section('content')
    @component('components.page-header')
        @slot('title', 'Criando grupo')
    @endcomponent

    <form action="{{ route('grupos.store') }}" method="post">
        @csrf

        @include('grupos._form')
    </form>
@endsection
