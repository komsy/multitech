@if ($homepage->testmonyShow == 1)
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-warning fs-5 mb-0">{{ $homepage->testimonialHeader1 }} </p>
                <h2 class="display-4 text-capitalize mb-3">{{ $homepage->testimonialHeader2 }}</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.4s">
                @foreach ($testimonials as $testimony)
                <div class="testimonial-item bg-light p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-warning">
                            <p class="mb-0"> {!! html_entity_decode ( $testimony->testimonial) !!} </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="me-4">
                                <img src="{{ asset('/storage/'.$testimony->testmonialImage)}}" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="d-block">
                                <h4 class="text-dark">{{ $testimony->name }} </h4>
                                <p class="m-0 pb-3">{{ $testimony->designation }}</p>
                                {{-- <div class="d-flex text-warning pe-5">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-muted"></i>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif