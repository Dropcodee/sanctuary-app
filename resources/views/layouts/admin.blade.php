<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> Sanctuary Uint | @yield('title')</title>
        {{-- App css files --}}
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/vector-map/jqvmap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    </head>
    <body class="font-sans antialiased">
        <div class="dashboard-main-wrapper">
            @include('layouts.admin-header')
            @include('layouts.sidebar')
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="container-fluid  dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pagehader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">@yield('header-title')</h3>
                                <p class="pageheader-text">@yield('desc')</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">@yield('bread_crumbs')
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
                @yield('content')
            </div>
        </div>
        @include('layouts.admin-footer')
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <!-- bootstrap bundle js-->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js-->
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- chartjs js-->
    <script src="{{ asset('assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>
    <!-- main js-->
    <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
    <!-- jvactormap js-->
    <script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- sparkline js-->
    <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('assets/vendor/charts/sparkline/spark-js.js') }}"></script>
    <!-- dashboard sales js-->
    <script src="{{ asset('assets/libs/js/dashboard-sales.js') }}"></script>
</body>
</html>
