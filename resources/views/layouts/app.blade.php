<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="default-style layout-offcanvas">
<head>
    <title>
        {{ View::hasSection('title') ? View::getSection('title').' - ' : '' }}Y - fast admin
    </title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link href="{{ asset('assets/fonts/roboto/roboto-fontface.css') }}" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/fonts/pe-icon-7-stroke.css') }}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/appwork.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/theme-corporate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/uikit.css') }}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/libs/sweetalert2/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}">

    <!-- Application stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/pages/authentication.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/appwork/vendor/css/pages/users.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @stack('styles')

    <!-- Load polyfills -->
    <script src="{{ asset('assets/appwork/vendor/js/polyfills.js') }}"></script>
    <script>document['documentMode'] === 10 && document.write('<script src="https://polyfill.io/v3/polyfill.min.js?features=Intl.~locale.en"><\/script>')</script>

    <script src="{{ asset('assets/appwork/vendor/js/material-ripple.js') }}"></script>
    <script src="{{ asset('assets/appwork/vendor/js/layout-helpers.js') }}"></script>

    <script>
        window.APP_HOME_URL = "{{ url('/') }}";
        window.APP_CSRF_TOKEN = "{{ csrf_token() }}";
    </script>
</head>

<body>
@yield('layout-content')

<!-- Core scripts -->
<script src="{{ asset('assets/js/jquery-3.4.0.min.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/js/sidenav.js') }}"></script>

<!-- Libs -->
<script src="{{ asset('assets/appwork/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/appwork/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.pt-BR.js') }}"></script>

<!-- Application scripts -->
<script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

@stack('scripts')
</body>
</html>
