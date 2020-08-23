<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
<title>Shnzo an Ecommerce Market Place</title>
<link rel="shortcut icon" href="{{ asset('images/logo_icon.png') }}" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="keyword" content="">
<meta name="description" content="">

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout_responsive.css') }}">

@stack('styles')

</head>

<body class="guest">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<a href=""><img src="{{ asset('images/logo.png') }}"></a>
			</div>
			<div class="col-md-10">
				<ul>
					<li>
						<a href="">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

@yield('content')

<x-footer />

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

@stack('scripts')

</body>
</html>