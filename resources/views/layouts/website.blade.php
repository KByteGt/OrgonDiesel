<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Orgon Diesel') }}</title>
    <meta content="Orgon Diesel Website" name="description">
    <meta content="Repuestos al instante, lubricantes, turbos, inyección diesel, lubricants, diesel injection" name="keywords">
    <meta content="Jose Lopez, @KByteGt" name="author">

    <!-- Favicons -->
    <link href="{{ asset('./favicon.ico') }}" rel="icon">
    <link href="{{ asset('./apple-icon.png') }}" rel="apple-touch-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/ef4ce1cded.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TKFWL45TH9"></script>
    {{--
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TKFWL45TH9');
    </script>
    --}}
</head>
<body>

<div id="app">
    @include('components.website.top_bar')
    @include('components.website.nav')

    @yield('content')

    @include('components.website.footer')

    <a href="https://wa.me/50254637035" class="btn-whatsapp align-items-center d-block d-sm-block d-md-none">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
</body>
</html>
