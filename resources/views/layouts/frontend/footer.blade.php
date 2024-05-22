<?php
$services=\App\Models\Service::select('serviceName',)->where('serviceStatus',1)->get();
?>
@if ($homepage->newsletterShow == 1)
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-center">
            <div class="col-lg-10 border rounded p-1">
                <div class="border rounded text-center p-1">
                    <div class="bg-white rounded text-center p-5">
                        <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" style="margin-top:-110px;padding-top:180px">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="bg-primary rounded p-4">
                        <a href="index.html"><h1 class="text-white text-uppercase mb-3">{{ explode(' ', env('APP_NAME', 'Multitech Solutions (K) Ltd'))[0] }}</h1></a>
                        <p class="text-white mb-0">Empowering Your Business with Innovative IT Solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $companyDetails->location2 }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $companyDetails->salesNumber ? $companyDetails->salesNumber : $companyDetails->phoneNumber }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="#" class="__cf_email__" data-cfemail="0b62656d644b6e736a667b676e25686466">{{ $companyDetails->salesEmail ? $companyDetails->salesEmail : $companyDetails->companyEmail }}</a></p>
                    <div class="d-flex pt-2">
                        @if($companyDetails->facebookProfile)
                        <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                        href="{{ $companyDetails->facebookProfile }}"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if($companyDetails->youtubeProfile)
                            <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                            href="{{ $companyDetails->youtubeProfile }}"><i class="fab fa-youtube"></i></a>
                        @endif
                        @if($companyDetails->twitterProfile)
                            <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                            href="{{ $companyDetails->twitterProfile }}"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if($companyDetails->linkedinProfile)
                            <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                            href="{{ $companyDetails->linkedinProfile }}"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row gy-5 g-4">
                        <div class="col-md-6">
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                            
                            <a class="btn btn-link" href>Services</a>
                            <a class="btn btn-link" href>About Us</a>
                            <a class="btn btn-link" href>Contact Us</a>
                            {{-- <a class="btn btn-link" href>Privacy Policy</a>
                            <a class="btn btn-link" href>Terms & Condition</a> --}}
                        </div>
                        <div class="col-md-6">
                            
                            <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                            @foreach ($services as $service)
                                <a class="btn btn-link" href>{{ $service->serviceName }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> <a class="fw-medium text-light"
                            href="https://multitech.co.ke">{{env('APP_NAME', 'Multitech Solutions (K) Ltd')}}</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="fw-medium text-light" href="#">Komtech</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

@else
      
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6  p-4 text-md-start">
                &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> <a class="fw-medium text-light"
                    href="https://multitech.co.ke">{{env('APP_NAME', 'Multitech Solutions (K) Ltd')}}</a>, All Right Reserved.
            </div>
            <div class="col-md-12 col-lg-3 d-flex pt-3" style="margin-left: 120px;">
                @if($companyDetails->facebookProfile)
                <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                href="{{ $companyDetails->facebookProfile }}"><i class="fab fa-facebook-f"></i></a>
                @endif
                @if($companyDetails->youtubeProfile)
                    <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                    href="{{ $companyDetails->youtubeProfile }}"><i class="fab fa-youtube"></i></a>
                @endif
                @if($companyDetails->twitterProfile)
                    <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                    href="{{ $companyDetails->twitterProfile }}"><i class="fab fa-twitter"></i></a>
                @endif
                @if($companyDetails->linkedinProfile)
                    <a class="btn btn-outline-light btn-social" target="_blank" rel="noopener noreferrer"
                    href="{{ $companyDetails->linkedinProfile }}"><i class="fab fa-linkedin-in"></i></a>
                @endif
                  {{-- Designed By <a class="fw-medium text-light" href="#">Komtech</a> --}}
            </div>
        </div>
    </div>
</div>
@endif