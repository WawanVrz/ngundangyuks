<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('frontend.header')
<body id="homepage">
	@yield('content')
</body>
	@include('frontend.footer')
</html>
