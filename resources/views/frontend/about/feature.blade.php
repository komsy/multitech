
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">WHy US</p>
                    <h2 class="display-4 text-capitalize mb-3">Why Choose Us</h2>
                </div>
                <div class="row g-4">
                    @foreach ($whyChooseUs as $chooseUs)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                                <img src="{{ asset('/storage/'.$chooseUs->icon)}}" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                {{-- <i class="fas fa-city text-primary fa-5x"></i> --}}
                            </div>
                            <a href="#" class="h4 d-block my-4">{{ $chooseUs->heading }}</a>
                            <p class="mb-0">{!! html_entity_decode ( $chooseUs->text) !!} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>