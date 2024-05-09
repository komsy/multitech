@extends('layouts.app')
@section('content')

        <!-- Contact Start -->
            @livewire('contact-us')
        <!-- Contact End -->

        <!-- Footer Start -->
            @include('layouts.frontend.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
@endsection


