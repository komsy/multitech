
@if ($homepage->factShow == 1)
    <div class="container-fluid facts pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                @foreach ($facts as $fact)
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-warning shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="{{ $fact->icon }} text-warning"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">{{ $fact->heading }}</h5>
                            <h1>
                                <span class="text-white mb-0" data-toggle="counter-up">{{ $fact->number }}</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </h1>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif