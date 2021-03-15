@extends('layouts.app')

@section('layout-content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-1">
        <div class="layout-inner">

            <!-- Layout navbar -->
            @include('layouts.includes.navbar')
            <!-- / Layout navbar -->

            <!-- Layout container -->
            <div class="layout-container">

                @if(!config('app.horizontal_sidenav'))
                    <!-- Layout sidenav -->
                    @include('layouts.includes.sidenav')
                    <!-- / Layout sidenav -->
                @endif

                <!-- Layout content -->
                <div class="layout-content">

                    @if(config('app.horizontal_sidenav'))
                        <!-- Layout sidenav -->
                        @include('layouts.includes.sidenav')
                        <!-- / Layout sidenav -->
                    @endif

                    <!-- Content -->
                    <div class="container-fluid flex-grow-1 container-p-y">

                        @include('partials.page-notice')
                        @include('partials.form-notice')

                        @yield('content')

                    </div>
                    <!-- / Content -->

                    <!-- Layout footer -->
                    @include('layouts.includes.footer')
                    <!-- / Layout footer -->

                </div>
                <!-- Layout content -->

            </div>
            <!-- / Layout container -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
