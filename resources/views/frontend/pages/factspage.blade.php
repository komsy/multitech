@if ($homepage->factPageShow == 1)
        <div class="container-fluid counter py-5">
            <div class="container py-5">
                <div class="row g-4">
                    @foreach ($facts as $fact)
                    <div class="col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="{{ $fact->icon }} fa-4x text-warning"></i>
                                    <h4 class="text-dark my-4">{{ $fact->heading }}</h4>
                                    <div class="counter-counting">
                                        <span class="text-warning fs-2 fw-bold" data-toggle="counter-up">{{ $fact->number }}</span>
                                        <span class="h1 fw-bold text-warning">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                        <a class="counter-btn btn btn-warning py-3 px-5" href="{{ route('contact') }}">Join With Us</a>
                    </div>
                </div>
            </div>
        </div>
        @endif