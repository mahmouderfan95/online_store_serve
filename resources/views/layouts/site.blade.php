<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
		@yield('style')
	</head>
	<body>
		@yield('content')

		<!-- scripts -->
		<script src="{{asset('assets/js/jquery-3.2.1.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
		<!-- scripts -->
	</body>
</html>