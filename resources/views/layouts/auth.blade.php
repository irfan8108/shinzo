<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
<title>Shnzo an Ecommerce Market Place</title>
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

<body class="WithLeftCat">

<x-header />

@yield('content')

<x-footer />

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

@push('scripts')

</body>
</html>
