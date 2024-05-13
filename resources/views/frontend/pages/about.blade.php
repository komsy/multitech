
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-item-image d-flex">
                            <img src="{{ asset('/storage/'.$aboutUs->aboutImage1)}}" class="img-1 img-fluid w-50" alt="About Image">
                        <img src="{{ asset('/storage/'.$aboutUs->aboutImage2)}}" class="img-2 img-fluid w-50" alt="About Image">
                        {{-- <img src="img/about.jpg" class="img-1 img-fluid w-50"  alt=""> 
                        <img src="img/about-3.jpg" class="img-2 img-fluid w-50"  alt="">--}}
                        <div class="about-item-image-content">
                            <img src="{{ asset('/storage/'.$aboutUs->aboutImage3)}}" cclass="img-fluid w-100 h-100" style="object-fit: cover;"  alt="About Image">
                            {{-- <img src="img/about-1.png" class="img-fluid w-100 h-100" style="object-fit: cover;" alt=""> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="about-item-content">
                        <p class="text-uppercase text-secondary fs-5 mb-0">{{ $aboutUs->aboutHeading1 }}</p>
                        <h2 class="display-4 text-capitalize mb-3">{{ $aboutUs->aboutHeading2 }}</h2>
                        <p class="mb-4 fs-5">{!! html_entity_decode ( $aboutUs->aboutDescription) !!}</p>
                        <div class="pb-4 mb-4 border-bottom">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="about-item-content-img">
                                        <img src="{{ asset('/storage/'.$aboutUs->aboutImage4)}}" class="img-fluid w-100" alt="About Image">
                                        {{-- <img src="img/about-2.jpg" class="img-fluid w-100" alt=""> --}}
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex mb-4">
                                        <div class="text-secondary">
                                            <i class="{{ $aboutUs->aboutIcon1 }} fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">{!! html_entity_decode ( $aboutUs->aboutText1) !!}</h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-secondary">
                                            <i class="{{ $aboutUs->aboutIcon2 }} fa-3x"></i>
                                        </div>
                                        <h4 class="ms-3">{!! html_entity_decode ( $aboutUs->aboutText2) !!}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-0 gx-4 justify-content-between pb-4">
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> {!! html_entity_decode ( $aboutUs->aboutPoint1) !!}</p>
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> {!! html_entity_decode ( $aboutUs->aboutPoint2) !!}</p>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> {!! html_entity_decode ( $aboutUs->aboutPoint3) !!}</p>
                                <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> {!! html_entity_decode ( $aboutUs->aboutPoint4) !!}</p>
                            </div>
                        </div>
                        <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="{{ route('about') }}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>