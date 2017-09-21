@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="work-wrapper container">
			<div class="banner">My Workspace</div>
			<div class="row">
				<div class="col-md-4">
					<div class="project-wrapper">
						<div class="square undg"></div>
						<div class="project">
							<div class="project-title">UNDG Transparency Portal</div>
							<ul class="project-platform">
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/js.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/node.png')}}" alt=""/></li>
							</ul>
							<p class="project-description">{{$undg_desc}}</p>
							<div class="project-client"><img src="{{asset('images/undg_logo.png')}}" alt="Developer
						Company"/></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-wrapper">
						<div class="square sindhupalcheck"></div>
						<div class="project">
							<div class="project-title">Sindhupalcheck</div>
							<ul class="project-platform">
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/js.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/php.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/laravel.png')}}" alt=""/></li>
							</ul>
							<p class="project-description">{{$sindhupalcheck_desc}}</p>
							<div class="project-client"><img src="{{asset('images/ia_logo.png')}}" width=100 alt="Developer
						Company"/></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-wrapper">
						<div class="square moldova"></div>
						<div class="project">
							<div class="project-title">Moldova Contract</div>
							<ul class="project-platform">
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/js.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/php.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/laravel.png')}}" alt=""/></li>
							</ul>
							<p class="project-description">{{ $moldova_desc }}</p>
							<div class="project-client"><img src="{{asset('images/yipl.svg')}}"
															 alt="Developer Company"/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-wrapper">
						<div class="square rp"></div>
						<div class="project">
							<div class="project-title">Resource Projects</div>
							<ul class="project-platform">
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/js.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/react.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/node.png')}}" alt=""/></li>
							</ul>
							<p class="project-description">{{ $rp_desc }}</p>
							<div class="project-client"><img src="{{asset('images/nrgi_logo.png')}}" alt="Developer
						Company"/></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-wrapper">
						<div class="square rc"></div>
						<div class="project">
							<div class="project-title">Resource Contracts</div>
							<ul class="project-platform">
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/js.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/php.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/laravel.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/react.png')}}" alt=""/></li>
							</ul>
							<p class="project-description">{{ $rc_desc }}</p>
							<div class="project-client"><img src="{{asset('images/nrgi_logo.png')}}"
															 alt="Developer Company"/></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project-wrapper">
						<div class="square rs"></div>
						<div class="project">
							<div class="project-title">Skutjsgruppen</div>
							<ul class="project-platform">
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/js.png')}}" alt=""/></li>
								<li class="project-platform-li"><img class="project-platform-img"
																	 src="{{asset('images/react.png')}}" alt=""/></li>
							</ul>
							<p class="project-description">{{ $rs_desc }}</p>
							<div class="project-client"><img src="{{asset('images/yipl.svg')}}"
															 alt="Developer Company"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection