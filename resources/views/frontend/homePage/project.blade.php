 
@if ($homepage->projectShow == 1)
    <div class="container-fluid project py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <p class="text-uppercase text-secondary fs-5 mb-0">Our Projects</p>
                <h2 class="display-4 text-capitalize mb-3">Recent Completed Projects</h2>
            </div>
            <div class="row g-5">
                @foreach ($projects as $project)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="project-img">
                                    <img src="{{ asset('/storage/'.$project->projectImage)}}" class="img-fluid w-100 pt-3 ps-3" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="project-content mb-4">
                                    <p class="fs-5 text-secondary mb-2">{{ $project->projectName }}</p>
                                    <a href="#" class="h4">{{ $project->heading }}</a>
                                    <p class="mb-0 mt-3">{!! html_entity_decode ( $project->description) !!}</p>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-secondary py-3 px-5" href="#">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
@endif