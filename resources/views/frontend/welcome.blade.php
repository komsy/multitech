@extends('layouts.homepage')
@section('content')

        <!-- About Start -->
            @include('frontend.pages.about')
        <!-- About End -->

        <!-- Features Start -->
            @include('frontend.pages.feature')
        <!-- Features End -->
    
        
        <!-- Services Start -->
            @include('frontend.pages.service')
        <!-- Services End -->

        <!-- Projects Start -->
            @include('frontend.homePage.project')
        <!-- Projects End -->

        <!-- Testimonial Start -->
            @include('frontend.homePage.testimonial')
        <!-- Testimonial End -->

        <!-- Footer Start -->
            @include('layouts.frontend.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
@endsection


