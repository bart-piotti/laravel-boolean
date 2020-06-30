<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title data-page="@yield('page_title')">@yield('page_title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="http://kit.fontawesome.com/ae1fb106e8.js"
         crossorigin="anonymous"></script>
    </head>
    <body>
        @include('partials.header')
        @yield('page')
        @include('partials.footer')
    </body>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
</html>
