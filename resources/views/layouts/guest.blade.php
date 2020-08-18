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

@push('styles')

</head>

<body class="guest">

<header>
	<div class="container">
		<div class="row">
			<center><img src="{{ asset('images/logo.png') }}"></center>
		</div>
	</div>
</header>

@yield('content')

<x-footer />

@push('scripts')

</body>
</html>
