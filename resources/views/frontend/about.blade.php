@extends('layouts.app')
@section('content')
        <!-- About Start -->
            @include('frontend.about.about')
        <!-- About End -->

        <!-- Features Start -->
            @include('frontend.about.feature')
        <!-- Features End -->
    
        <!-- Fact Counter -->
        @if ($homepage->factPageShow == 1)
        <div class="container-fluid counter py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-thumbs-up fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Completed Projects</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">456</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-users fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Happy Customers</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">513</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-user fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Qualified Engineers</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">53</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-heart fa-4x text-secondary"></i>
                                    <h4 class="text-dark my-4">Years Experiance</h4>
                                    <div class="counter-counting">
                                        <span class="text-secondary fs-2 fw-bold" data-toggle="counter-up">17</span>
                                        <span class="h1 fw-bold text-secondary">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                        <a class="counter-btn btn btn-secondary py-3 px-5" href="#">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Fact Counter -->
        <!-- Footer Start -->
            @include('layouts.frontend.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

    
@endsection


