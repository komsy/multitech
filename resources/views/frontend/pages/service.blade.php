
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-warning">{{ $homepage->serviceHeader1 }} </h5>
                <h1>{{ $homepage->serviceHeader2 }} </h1>
            </div>
            <div class="row g-5 services-inner">
                @foreach ($services as $service)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <img src="{{ asset('/storage/'.$service->serviceImage)}}" class="img-fluid w-100 pt-3 ps-3 mb-3" alt="">

                                {{-- <i class="fa fa-code fa-7x mb-4 text-primary"></i> --}}
                                <h4 class="mb-2">{{ $service->serviceName }}</h4>
                                <p class="mb-4">{!! html_entity_decode ( $service->serviceDescription) !!}</p>
                                <!--<a href="{{ route('contact') }}" class="btn btn-warning text-white px-5 py-3 rounded-pill">Get In Touch</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>