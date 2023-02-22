<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
	
	<style>
		main > .container { padding: 60px 15px 0;}
	</style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">  
		@include('inc.navbar')
		@include('inc.messages')
		<div class="container">
			@yield('content')
		</div>
		
		<footer class="footer mt-auto py-3 bg-dark fixed-bottom">
		  <div class="container">
			<span class="text-muted">&copy; Copyright</span>
		  </div>
		</footer>
	</div>
</body>
</html>
