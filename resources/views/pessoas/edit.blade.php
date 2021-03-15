@extends('layouts.layout-1')

@section('title', 'Editando pessoa - Pessoas')

@section('content')
    @component('components.page-header')
        @slot('title')
            Editando pessoa <span class="text-muted">#{{ $pessoa->id }}</span>
        @endslot
    @endcomponent

    <form action="{{ route('pessoas.update', ['id' => $pessoa->id]) }}" method="post">
        @method('put')
        @csrf

        @include('pessoas._form')
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
