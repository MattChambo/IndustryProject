<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial=scale=1">
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css.map">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css.map">
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
		@yield('tinymce')
	</head>
	<body>

	@include('partials._nav')

	@yield('content')

	@include('partials._footer')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/npm.js"></script>
		<script src="/js/navigation.js"></script>
		@yield('scripts')
	</body>
</html>