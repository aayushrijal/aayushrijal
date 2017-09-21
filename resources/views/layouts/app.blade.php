<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Cabin|Raleway|Sacramento" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	<title>Aayush Rijal</title>
	<script type="text/javascript">window.liveSettings = {api_key: "b9be1a6072ba4bf9acb2cc93fe9dab2b"};</script>
	<script type="text/javascript" src="//cdn.transifex.com/live.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
	<a class="navbar-brand" href="{{ route('home') }}">
		<div class="nav-img"></div>
	</a>
	<div class="cd-stretchy-nav">
		<a class="cd-nav-trigger" href="#0">
			<span aria-hidden="true"></span>
		</a>

		<ul>
			<li><a href="{{ route('home') }}" class="{{Request::segments()[0] === '' ?
			'active' : ''}}"><span>Home</span></a></li>
			<li><a href="{{ route('about') }}" class="{{Request::segments()[0] ===
			'about' ? 'active' : ''}}"><span>About</span></a></li>
			<li><a href="{{ route('portfolio') }}" class="{{Request::segments()[0]
			=== 'portfolio' ? 'active' : ''}}"><span>Portfolio</span></a></li>
			<li><a href="{{ route('contact') }}" class="{{ Request::segments()[0] === 'contact' ? 'active' : ''
			}}"><span>Contact</span></a></li>
		</ul>

		<span aria-hidden="true" class="stretchy-nav-bg"></span>
	</div>
	{{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"--}}
	{{--aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">--}}
	{{--<span class="navbar-toggler-icon"></span>--}}
	{{--</button>--}}
	{{--<div class="collapse navbar-collapse" id="navbarCollapse">--}}
	{{--<div class="navbar-nav mr-auto"></div>--}}
	{{--<ul class="navbar-nav nav-contacts-wrapper">--}}
	{{--<li class="nav-item nav-contacts">--}}
	{{--<a href="https://www.facebook.com/aayushrij" target="_blank"><img src="{{asset('images/fb.png')}}"--}}
	{{--width=30/></a>--}}
	{{--</li>--}}
	{{--<li class="nav-item nav-contacts">--}}
	{{--<a href="https://www.instagram.com/aayushrij/" target="_blank"><img--}}
	{{--src="{{asset('images/instagram.png')}}" width=30/></a>--}}
	{{--</li>--}}
	{{--<li class="nav-item nav-contacts">--}}
	{{--<a href="https://github.com/aayushrijal" target="_blank"><img src="{{asset('images/github.png')}}"--}}
	{{--width=30/></a>--}}
	{{--</li>--}}
	{{--<li class="nav-item nav-contacts">--}}
	{{--<a href="https://medium.com/@aayush.rijal" target="_blank"><img src="{{asset('images/medium.png')}}"--}}
	{{--width=30/></a>--}}
	{{--</li>--}}
	{{--</ul>--}}
	{{--</div>--}}
</nav>
@yield('content')
@include('partials.footer')
<script src="{{asset('js/vendor/jquery-2.2.3.min.js')}}"></script>
<script src="{{ asset('js/custom/navi.js') }}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
</body>
</html>
