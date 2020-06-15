    <head>
        <title>Wawan & Yuni Wedding | My Invitation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="Lovus is responsive wedding html website template">
        <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">

        <meta property="og:title" content="@yield('meta_title')"/>
        <meta property="og:description" content="@yield('meta_description')"/>
        <meta property="og:url" content="https://{{ $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] }}"/>
        <meta property="og:type" content="page"/>
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}"/>
        <meta property="og:site_name" content="My Invitation"/>
        <meta property="og:image" content="{{ url('') }}/@yield('meta_image')"/>
        <meta property="og:image:url" content="{{ url('') }}/@yield('meta_image')"/>
        <meta property="og:image:size" content="350"/>

        <meta name="twitter:title" content="@yield('meta_title')"/>
        <meta name="twitter:card" content="@yield('meta_description')"/>
        <meta name="twitter:site" content="{{ url('') }}/" />
            
        <!-- Icon -->
        <link rel="icon" href="{{ asset('assets/images/icon/info.png') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.countdown.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/animsition.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/bg.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}" type="text/css" id="colors">
        <link rel="stylesheet" href="{{ asset('assets/plugin/fa-4.7.0/css/font-awesome.min.css') }}" type="text/css">
    </head>