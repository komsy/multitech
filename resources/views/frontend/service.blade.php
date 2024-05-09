@extends('layouts.app')
@section('content')
    
        <!-- Services Start -->
        @include('frontend.pages.service')
        <!-- Services End -->
  
        <!-- Fact Counter -->
        @include('frontend.pages.factspage')
        <!-- End Fact Counter -->

        <!-- Testimonial Start -->
            @include('frontend.homePage.testimonial')
        <!-- Testimonial End -->
  
        <!-- Fact Counter -->
        <!-- Footer Start -->
            @include('layouts.frontend.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
@endsection


