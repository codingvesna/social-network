<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DelosApp - @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
    <link href="{{ asset('fontisto/css/fontisto/fontisto.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/main.js')}}" type="text/javascript" defer></script>
</head>
<body class="font-body">
    @include('partials.header.header')
    <!-- Mobile Search -->
    @include('partials.header.search_mobile')
@yield('content')
</body>
</html>
