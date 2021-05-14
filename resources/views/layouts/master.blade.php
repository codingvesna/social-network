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

    <main class="px-4 lg:px-10 py-4 lg:py-6 mt-5">
        <section class="w-full flex flex-col md:flex-row justify-center items-start">
            <aside class="h-auto w-full md:w-2/12 px-4">
                <!-- Sidebar -->
            @include('partials.aside.sidebar')
            <!-- CTA -->
            @include('partials.aside.cta')
            </aside>

            @yield('content')

            <aside class="h-auto w-full md:w-3/12">
                <!-- Profile Card -->
                @include('partials.aside.profile_card')
                <!-- Who to follow - View All -->
                @include('partials.aside.who_to_follow')
                <!-- Group Suggestions - View All -->
                @include('partials.aside.my_groups')
            </aside>
        </section>
    </main>
</body>
</html>
