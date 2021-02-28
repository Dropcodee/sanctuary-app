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
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- et line icon -->
    <link rel="stylesheet" href="{{ asset('css/et-line-icons.css') }}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <!-- justified gallery -->
    <link rel="stylesheet" href="{{ asset('css/justified-gallery.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    {{-- <[if IE]>
        <script src="js/html5shiv.js"></script>
        <![endif]> --}}
</head>

<body class="font-sans antialiased">
    @include('layouts.header')
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skrollr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="{{ asset('js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="{{ asset('js/page-scroll.js') }}"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- counter -->
    <script type="text/javascript" src="{{ asset('js/jquery.count-to.js') }}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('js/jquery.stellar.js') }}"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hamburger-menu.js') }}"></script>
    <!-- counter -->
    <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
    <!-- fit video -->
    <script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>

    <!-- skill bars -->
    <script type="text/javascript" src="{{ asset('js/skill.bars.jquery.js') }}"></script>
    <!-- justified gallery -->
    <script type="text/javascript" src="{{ asset('js/justified-gallery.min.js') }}"></script>
    <!-- pie chart -->
    <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <!-- retina -->
    <script type="text/javascript" src="{{ asset('js/retina.min.js') }}"></script>
    <!-- revolution -->
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
    <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
