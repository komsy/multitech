<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{env('APP_NAME', 'Multitech Solutions (K) Ltd')}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="author" content="Multitech Solutions (K) Ltd">
        <meta name="description" content="Multitech Solutions (K) Ltd">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico') }}">
        @include('layouts.links')
    </head>    
    <body>
        <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        <!-- Spinner End -->
        
        @include('layouts.navbar')
        @include('layouts.homepage.header')
        @yield('content')
 
        <!-- Scripts -->
        @include('layouts.scripts')
        
    </body>
</html>