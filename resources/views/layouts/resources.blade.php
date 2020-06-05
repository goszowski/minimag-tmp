<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{ favicon(asset('img/fi/apple-icon-57x57.png')) }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ favicon(asset('img/fi/apple-icon-60x60.png')) }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ favicon(asset('img/fi/apple-icon-72x72.png')) }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ favicon(asset('img/fi/apple-icon-76x76.png')) }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ favicon(asset('img/fi/apple-icon-114x114.png')) }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ favicon(asset('img/fi/apple-icon-120x120.png')) }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ favicon(asset('img/fi/apple-icon-144x144.png')) }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ favicon(asset('img/fi/apple-icon-152x152.png')) }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ favicon(asset('img/fi/apple-icon-180x180.png')) }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ favicon(asset('img/fi/android-icon-192x192.png')) }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ favicon(asset('img/fi/favicon-32x32.png')) }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ favicon(asset('img/fi/favicon-96x96.png')) }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon(asset('img/fi/favicon-16x16.png')) }}">
        <link rel="manifest" href="{{ asset('img/fi/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ favicon(asset('img/fi/ms-icon-144x144.png')) }}">
        <meta name="theme-color" content="#ffffff">
        </style>
    </head>
    <body>
        @yield('app')
    </body>
</html>
