<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/navbar.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">

    @stack('styles')
    @stack('scripts')

</head>
<body style="margin: 0; padding:">
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/"> Home</a>
        <a href="">Websites</a>
        <a href="">Webshops</a>
        <a href="">Over ons</a>
        <a href="{{ route('contact')}}">Contact</a>
    </div>

    <section id="section">
      <div class="top">

    
      <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776;</span>

    
      </div>
    </section>





    <div id="app">


        <main class="py-4" style="padding: 0!important;">

            @yield('content')
            @extends('footer')
        </main>
    </div>
</body>
</html>
