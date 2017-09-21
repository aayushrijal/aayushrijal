@extends('layouts.app')

@section('content')
	<div class="namastey-cover container">
		<div class="cover-text">#namaste</div>
	</div>

	<div class="container intro">
		<div class="row">
			<div class="col-md-6">
				<div class="portrait-img-wrapper">
					<img src="{{asset('images/portrait.jpg')}}" alt="" class="portrait-img"/>
				</div>
			</div>
			<div class="col-md-6">
				<p class="name-banner">Aayush Rijal</p>
				<p class="designation">Software Engineer</p>
				<div class="intro-wrapper row">
					<div class="col-md-1">
						<img src="{{asset('images/left_quote.png')}}" width="40"/>
					</div>
					<div class="col-md-11">
						<p class="intro-description">
							It is a long established fact that a reader will be distracted by the readable content of a
							page when looking at its layout. The point of using Lorem Ipsum is that it has a
							more-or-less
							normal
							distribution of letters, as opposed to using 'Content here, content here', making it look
							like
							readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
							as
							their
							default model text, and a search for 'lorem ipsum' will uncover many web sites still in
							their
							infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose
							(injected humour and the like).
						</p>
						<p class="intro-description">
							Contact me
						</p>
					</div>
				</div>
			</div>

			{{--<div class="about-content-wrapper">--}}
			{{--<div class="portfolio-wrapper">--}}
			{{--<div class="portfolio-taskbar">--}}
			{{--<div class="cross"></div>--}}
			{{--<div class="stall"></div>--}}
			{{--<div class="minimize"></div>--}}
			{{--</div>--}}
			{{--<div class="row">--}}
			{{--<div class="col-md-12">--}}
			{{--<div class="portfolio-content">--}}
			{{--<p class="portfolio-text">about@aayushrijal$ telnet who is aayush|</p>--}}
			{{--<div class="portfolio-p-wrapper">--}}
			{{--<div class="portfolio-p">As an endeavour to making an impact in tech world, I--}}
			{{--have profoundly dedicated myself in Software arena. I not only work to--}}
			{{--connect people with the product they desire, but I work to inspire myself.--}}
			{{--Namastey! I am <strong>Aayush Rijal</strong> - a tech enthusiast, an--}}
			{{--established Software Engineer and a dude.--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--<div class="portfolio-footer">--}}
			{{--<div class="zsh-status">[0] 0:zsh*</div>--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--</div>--}}
		</div>
	</div>

@endsection