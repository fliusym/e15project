<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Hidden Gems')</title>
	<meta charset='utf-8'>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="/css/hiddengems.css">
	<link rel="stylesheet" type="text/css" href="/css/carousel.css">

	@yield('head')
</head>

	@yield('header')

	{{---flash messages----}}
<!-- 	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif -->
	
	@yield('content')
	@yield('footer')
	@yield('/body');

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<body>
</body>
</html>