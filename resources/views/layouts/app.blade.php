<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>Page slider - native js</title><link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/welcome.js') }}" defer></script> -->
	<!-- <script src="{{ asset('js/portfolio.js') }}"></script> -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/nav.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    @stack('styles')
    @stack('scripts')
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/06a651c8da.js" crossorigin="anonymous"></script> -->
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/welcome.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">

	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<body>
<header class="cd-header">
		<div class="header-wrapper">
			<div class="logo-wrap">
				<a href="/" class="hover-target"><span>Gecko</span>Webdevelopment</a>
			</div>
			<div class="nav-but-wrap">
				<div class="menu-icon hover-target">
					<span class="menu-icon__line menu-icon__line-left"></span>
					<span class="menu-icon__line"></span>
					<span class="menu-icon__line menu-icon__line-right"></span>
				</div>					
			</div>					
		</div>				
	</header>

	<div class="nav">
		<div class="nav__content">
			<ul class="nav__list">
				<li class="nav__list-item active-nav"><a href="/" class="hover-target">Home</a></li>
				<li class="nav__list-item"><a href="{{ route('prijzen')}}" class="hover-target">Diensten</a></li>
				<li class="nav__list-item"><a href="{{ route('our.work')}}" class="hover-target">Ons werk</a></li>
				<li class="nav__list-item"><a href="{{ route('contact')}}" class="hover-target">Contact</a></li>
			</ul>
            <ul>
                <a href="#" onclick="return true"><i class="fab fa-whatsapp fa-2x"></i></a>
                <a href="#" onclick="return true"><i class="fas fa-phone fa-2x"></i></a>
                <a href="#" onclick="return true"><i class="fas fa-envelope-square fa-2x"></i></a>
            </ul>
		</div>
	</div>		

        @yield('content')

    </body>
</html>