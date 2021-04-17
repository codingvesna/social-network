<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lemonade - @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
    <link href="{{ asset('fontisto/css/fontisto/fontisto.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body class="font-body">
    @yield('content')
</body>
</html>
