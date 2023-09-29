<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- The following Css files are related to navigation bar --->
	<!-- Animate.css For bottom navigation bar hover action --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{ asset('css/bootnavbar.css') }}">
	<!--------------------------------------------------------------------------------------------->
	<!-- Tailwind.css -->
	<link rel="stylesheet" href="{{ asset('css/tailwind/tailwind.min.css') }}">
    <!-- The fixed menu -->
	<link href="{{asset('css/metisMenu.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('owl_carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('owl_carousel/owl.theme.default.min.css') }}">
	<!-- For the fixed menu -->
	<link href="{{ asset('css/mm-vertical.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
	
    <title>MBK</title>
	
</head>
<body>
	
    @yield('content')
	
    @include('includes.home._bottom_navbar')
	@include('includes.home._bottom_section')
	@include('includes.home._divider')
	@include('includes.home._footer')
	@include('includes.home._scroll_to_top_btn')
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/metisMenu.js') }}"></script>
  	<script src="{{ asset('js/mm-vertical.js') }}" charset="utf-8"></script>
	<script src="{{ asset('owl_carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/bootnavbar.js') }}"></script>
	<script src="{{ asset('js/custom/script.js') }}"></script>
</body>
</html>