<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/app-cNy9yCjt.css') }}" rel="stylesheet">
</head>
<body class="">
    <div>
        @include('public.partials.home_intro')
    </div>
    @include('public.partials.navigation')
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('build/assets/app-Cs0QkU1O.js') }}"></script>
</body>
</html>
