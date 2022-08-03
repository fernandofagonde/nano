@extends('layouts.layout-1')

@section('title', 'Início')

@section('content')

    <!-- Counters -->
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="lnr lnr-users display-4 text-warning"></div>
                        <div class="ml-3">
                            <a href="{{ route('clientes.index') }}">
                                <div class="text-muted small">Clientes cadastrados</div>
                                <div class="text-large">{{ count($clientes) }}</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Counters -->
@endsection
