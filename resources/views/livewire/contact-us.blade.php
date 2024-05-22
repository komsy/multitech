<div>
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <p class="text-uppercase text-warning fs-5 mb-0">{{ $contactUs->header }} </p>
                        <h2 class="display-4 text-capitalize mb-3">{{ $contactUs->subHeading }}</h2>
                        <p class="mb-0">{{ $contactUs->text }}</p>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (session()->has('success') )
                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            <div class="alert alert-secondary">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                    @else
                    <form wire:submit.prevent="submit">
                        <div class="row g-3">   
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input class="form-control @error('contactName') is-invalid @enderror" id="contactName" type="text" placeholder=" " wire:model.defer="contactName">
                                    <label for="contactName">Full Name</label>
                                    @error('contactName')
                                        <div id="invalidcontactNameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input class="form-control @error('contactEmail') is-invalid @enderror" id="contactEmail" type="email" placeholder=""  wire:model.defer="contactEmail">
                                    <label for="contactEmail">Email</label>
                                    @error('contactEmail')
                                        <div id="invalidcontactNameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input class="form-control @error('contactNumber') is-invalid @enderror" id="contactNumber" type="text" placeholder=""  wire:model.defer="contactNumber">
                                    <label for="contactNumber">Phone Number</label>
                                    @error('contactNumber')
                                        <div id="invalidcontactNumberFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <select name="service_id" id="service_id" class="form-control @error('service_id') is-invalid @enderror"  wire:model.defer="service_id">
                                        <label for="service_id">Select Service</label>
                                    <option value="">Choose a service</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->serviceName }}</option>
                                        @endforeach
                                    </select>
                                    @error('service_id')
                                        <div id="invalidservice_idFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating border border-secondary">
                                    <textarea class="form-control @error('contactMessage') is-invalid @enderror" id="contactMessage" rows="5" placeholder="" spellcheck="false" data-gramm="false"  wire:model.defer="contactMessage"></textarea>
                                    <label for="contactMessage">Your Message</label>
                                    @error('contactMessage')
                                        <div id="invalidcontactNameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                    
                    @endif
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="contact-map h-100 w-100">
                        <iframe class="h-100 w-100" 
                        style="height: 500px;" src="{{ $contactUs->map }}" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                        <i class="fas fa-map-marker-alt fa-2x text-warning me-4"></i>
                        <div>
                            <h4>Address</h4>
                            <p class="mb-0">{{ $companyDetails->location2 }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                        <i class="fas fa-envelope fa-2x text-warning me-4"></i>
                        <div>
                            <h4>Mail Us</h4>
                            <p class="mb-0">{{ $companyDetails->salesEmail ? $companyDetails->salesEmail : $companyDetails->companyEmail }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="d-inline-flex bg-white w-100 border border-warning p-4">
                        <i class="fa fa-phone-alt fa-2x text-warning me-4"></i>
                        <div>
                            <h4>Telephone</h4>
                            <p class="mb-0">{{ $companyDetails->salesNumber ? $companyDetails->salesNumber : $companyDetails->phoneNumber }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
