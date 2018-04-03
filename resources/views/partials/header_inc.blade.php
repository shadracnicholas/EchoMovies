<!DOCTYPE html>
<html>
<head>
	<title>Homepage | Echo Movies </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- //for-mobile-apps -->
	<link href="{{Route('home')}}/public/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{Route('home')}}/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{Route('home')}}/public/assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{Route('home')}}/public/assets/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Plugins -->
	<link href="{{Route('home')}}/public/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
	<link href="{{Route('home')}}/public/assets/plugins/alertify/css/alertify.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Page Level stylesheet -->
	@yield('stylesheet')
</head>
<body>
