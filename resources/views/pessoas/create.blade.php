@extends('layouts.layout-1')

@section('title', 'Criando pessoa - Pessoas')

@section('content')
    @component('components.page-header')
        @slot('title', 'Criando pessoa')
    @endcomponent

    <form action="{{ route('pessoas.store') }}" method="post">
        @csrf

        @include('pessoas._form')
    </form>
@endsection
