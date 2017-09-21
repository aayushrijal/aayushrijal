<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	<title>Aayush Rijal</title>
</head>
<body>
<header>
	<nav class="cd-stretchy-nav">
		<a class="cd-nav-trigger" href="#0">
			<span aria-hidden="true"></span>
		</a>

		<ul>
			<li><a href="{{ route('home') }}" class="active"><span>Home</span></a></li>
			<li><a href="{{ route('about') }}"><span>About</span></a></li>
			<li><a href="{{ route('portfolio') }}"><span>Portfolio</span></a></li>
			<li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
		</ul>

		<span aria-hidden="true" class="stretchy-nav-bg"></span>
	</nav>
</header>
@yield('content')
<script src="{{asset('js/vendor/jquery-2.2.3.min.js')}}"></script>
<script src="{{ asset('js/custom/navi.js') }}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
</body>
</html>
