@extends('layouts.layout-1')

@section('title', 'Criando cliente - Clientes')

@section('content')
    @component('components.page-header')
        @slot('title', 'Criando cliente')
    @endcomponent

    <form action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        @include('clientes._form')
    </form>
@endsection
