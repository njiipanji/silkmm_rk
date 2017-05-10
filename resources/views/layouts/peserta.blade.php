<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title') | SILKMM Pra-TD FTIf ITS</title>
		<link rel="shorcut icon" type="image/png" href="{{ url('favicon.png') }}">
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style type="text/css">
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}
			main {
				flex: 1 0 auto;
			}
			@media only screen and (max-width:992px){
				nav .brand-logo {
					margin-left: 0px !important;
				}
			}
			@yield('style')
		</style>
	</head>
	<body>
		<header>
			{{-- dropdown list --}}
			<ul id="dropdown_pakuesioner" class="dropdown-content">
				<li><a href="{{ url('/peserta/isipa') }}">PA</a></li>
				<li><a href="{{ url('/peserta/kuesioner') }}">Kuesioner</a></li>
			</ul>
			<ul id="dropdown_profile" class="dropdown-content">
				<li><a href="{{ url('/') }}">Logout</a></li>
			</ul>

			{{-- navbar --}}
			<nav class="white" role="navigation">
				<div class="nav-wrapper">
					<a id="logo-container" href="{{ url('/') }}" class="brand-logo grey-text text-darken-3" style="font-weight: 200; margin-left: 25px;">SILKMM</a>
					<ul class="left hide-on-med-and-down" style="margin-left: 175px;">
						<li class="{{ Request::is('peserta') ? 'active' : 'no' }}"><a class="grey-text text-darken-3" href="{{ url('/peserta') }}">Home</a></li>
						<li class="{{ Request::is('peserta/daftar') ? 'active' : 'no' }}"><a class="grey-text text-darken-3" href="{{ url('/peserta/daftar') }}">Daftar</a></li>

						{{-- Opened menu -> ini dimunculin ketika sudah daftar --}}
						<li class="{{ Request::is('peserta/berkas') ? 'active' : 'no' }}"><a class="grey-text text-darken-3" href="{{ url('/peserta/berkas') }}">Berkas</a></li>
						<li class="{{ Request::is('/peserta/pakuesioner','/peserta/isipa','/peserta/kuesioner') ? 'active' : 'no' }}"><a class="dropdown-button grey-text text-darken-3" href="#!" data-activates="dropdown_pakuesioner">PA/Kuesioner<i class="material-icons right">arrow_drop_down</i></a></li>
						{{-- Closed menu --}}
					</ul>
					<ul class="right hide-on-med-and-down">
						<li class="teal lighten-1"><a class="dropdown-button" href="#!" data-activates="dropdown_profile"><i class="material-icons left">person</i>5114100001</a></li>
					</ul>

					<ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
						<li><a href="{{ url('/peserta') }}">Home</a></li>
						<li><a href="{{ url('/peserta/daftar') }}">Daftar</a></li>
						{{-- Opened menu -> ini dimunculin ketika sudah daftar --}}
						<li><a href="{{ url('/peserta/berkas') }}">Berkas</a></li>
						<li><a href="{{ url('/peserta/pakuesioner') }}">PA/Kuesioner</a></li>
						{{-- Closed menu--}}
						<li><a href="{{ url('/') }}">Keluar</a></li>
					</ul>

					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons grey-text text-darken-3">menu</i></a>
				</div>
			</nav>
		</header>

		<main>
			<div class="container">
				<div class="row center" style="margin-top: 100px; margin-bottom: 0px;">
					<h3 style="font-weight: 600;">@yield('title-page')</h3>
				</div>
				<div class="row">
					@yield('content')
				</div>
			</div>
		</main>

		{{-- footer --}}
		<footer class="page-footer white">
			<div class="container">
				<div class="row center">
					<div class="col s12">
						<div class="container grey-text text-darken-3">Copyright 2017 © SILKMM</div>
						{{-- <h6 class="grey-text text-darken-3" style="font-weight: 200;">Supported by:</h6>
						<img src="{{ url('ftif-logo.png') }}" width="75px" style="padding: 5px">
						<img src="{{ url('bakor-logo.png') }}" width="75px" style="padding: 5px"> --}}
					</div>
				</div>
			</div>
		</footer>
		
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
		<script type="text/javascript">
			$( document ).ready(function(){
				$(".dropdown-button").dropdown();
				$(".button-collapse").sideNav();
				@yield('script')
			})
		</script>
	</body>
</html>