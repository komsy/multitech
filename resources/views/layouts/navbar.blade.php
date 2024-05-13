
<?php
$companyDetails=\App\Models\CompanyProfile::first();
$homepage=\App\Models\Homepage::select('topbarShow',)->first();
?>
@if ($homepage->topbarShow == 1)
<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex top-section">
    <div class="container py-1">
        <div class="d-flex align-items-center">
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i
                        class="fa fa-map-marker-alt me-3"></i>{{ $companyDetails->location2 }}</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>{{ $companyDetails->salesEmail ? $companyDetails->salesEmail : $companyDetails->companyEmail }}
                </small>
                <small class="ms-4"><i class="fa fa-phone-alt me-2"></i>{{ $companyDetails->salesNumber ? $companyDetails->salesNumber : $companyDetails->phoneNumber }}
                </small>
                <div class="ms-3 d-flex">
                    @if($companyDetails->facebookProfile)
                        <a class="social-btn btn-sm-square btn-light text-primary rounded-circle ms-2" target="_blank" rel="noopener noreferrer"
                        href="{{ $companyDetails->facebookProfile }}"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if($companyDetails->instagramProfile)
                        <a class="social-btn btn-sm-square btn-light text-primary rounded-circle ms-2" target="_blank" rel="noopener noreferrer"
                        href="{{ $companyDetails->instagramProfile }}"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if($companyDetails->twitterProfile)
                        <a class="social-btn btn-sm-square btn-light text-primary rounded-circle ms-2" target="_blank" rel="noopener noreferrer"
                        href="{{ $companyDetails->twitterProfile }}"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if($companyDetails->linkedinProfile)
                        <a class="social-btn btn-sm-square btn-light text-primary rounded-circle ms-2" target="_blank" rel="noopener noreferrer"
                        href="{{ $companyDetails->linkedinProfile }}"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
@endif
<!-- Navbar & Hero Start -->
<div class="container-fluid sticky-top px-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 px-4">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-secondary display-6"><i class="fas fa-city text-primary me-3"></i>Multitech</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            
            <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a> 
            </div>
            
            
            <div class="d-none d-xl-flex flex-shirink-0 ml-5">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt  fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="">Have any questions?</span>
                    <span class="text-secondary">Call: {{ $companyDetails->salesNumber ? $companyDetails->salesNumber : $companyDetails->phoneNumber }}
                    </span>
                </div>
            </div>
            <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                <!-- <button class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                <a href="{{ route('contact') }}" class="btn btn-secondary py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Get a Quate</a>
            </div>
            
        </div>
    </nav>
    
</div> 
<!-- Navbar & Hero End -->

<!-- Modal Search Start -->
<!-- Modal Search End -->