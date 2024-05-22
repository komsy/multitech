<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title>{{env('APP_NAME', 'Multitech Solutions (K) Ltd')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>-->
        <meta name="author" content="Multitech Solutions (K) Ltd">
        <meta name="description" content="Multitech Solutions (K) Ltd">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="ico" href="{{ asset('/favicon.ico') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
