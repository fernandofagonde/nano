@extends('layouts.app')

@section('title', 'Entrar')

@section('layout-content')
    <div class="authentication-wrapper authentication-1 px-4">
        <div class="authentication-inner py-4">

            <!-- Logo -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="ui-w-240">
                    <div class="w-100 position-relative" style="padding-bottom: 34.85715%">
                        <img src="{{ asset('assets/images/login-logo.png') }}" class="w-100 h-auto position-absolute">
                    </div>
                </div>
            </div>
            <!-- / Logo -->

            @include('partials.form-notice', ['class'=> 'my-4'])

            <!-- Form -->
            <form action="{{ route('login') }}" method="post" class="my-4">
                @csrf

                <div class="form-group">
                    <label class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" value="{{ old('login') }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="d-flex justify-content-end m-0">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
            <!-- / Form -->

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('input[name=login]').focus();
        });
    </script>
@endpush
