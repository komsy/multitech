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
        <?php
        $facts=\App\Models\Fact::select('icon','heading','number')->where('factStatus',1)->get();
        $companyDetails=\App\Models\CompanyProfile::first();
        $homepage=\App\Models\Homepage::first();
        ?>
        <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        <!-- Spinner End -->
        
        <!-- Navbar & Hero Start -->
        @include('layouts.navbar')
        <!-- Navbar & Hero End -->

        {{-- Header Start --}}
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Not Found</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">404</li>
                </ol>    
            </div>
        </div>
        {{-- Header End --}}

        @yield('content')
 
        <!-- Footer Start -->
        @include('layouts.frontend.footer')
        <!-- Footer End -->

        <!-- Scripts -->
        @include('layouts.scripts')
        
    </body>
</html>