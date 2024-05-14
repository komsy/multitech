
    <!-- Carousel Start -->
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/storage/'.$homepage->homepageImage1)}}" class=" w-100" alt="Homepage Image">
                {{-- <img class="w-100" src="img/carousel-1.jpg" alt="Image"> --}}
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $homepage->header1 }}</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $homepage->header2 }}</h1>
                        <a href="{{ route('contact') }}" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/storage/'.$homepage->homepageImage2)}}" class=" w-100" alt="Homepage Image">
                {{-- <img class="w-100" src="img/carousel-2.jpg" alt="Image"> --}}
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $homepage->header1 }}</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">{{ $homepage->header2 }}</h1>
                        <a href="{{ route('contact') }}" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->