@extends('layouts.app')
@section('content')
        <!-- About Start -->
            @include('frontend.pages.about')
        <!-- About End -->

        <!-- Features Start -->
            @include('frontend.pages.feature')
        <!-- Features End -->
    
        <!-- Fact Counter -->
            @include('frontend.pages.factspage')
        <!-- End Fact Counter -->

        <!-- Footer Start -->
            @include('layouts.frontend.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
@endsection


