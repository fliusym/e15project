<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','project 3')</title>
	<meta charset='utf-8'>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='/css/p3.css',type='text/css'>

	@yield('head')
</head>

<body>

</body>
<h1>Developer's Best Friend</h1>
<div class='container'>
	<ul class='nav nav-tabs'>
		@yield('tabcontents')
	</ul>
</div>

@yield('content')
@yield('body')
</html>