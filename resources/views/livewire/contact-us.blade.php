<div>
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <p class="text-uppercase text-secondary fs-5 mb-0">Let’s Connect</p>
                        <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                        <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <form wire:submit.prevent="submit">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    {{-- <input type="text" class="form-control" id="name" placeholder="Your Name"> --}}
                                    <label for="name">Full Name</label> 
                                    <input class="form-control @error('contactName') is-invalid @enderror" id="contactName" type="text" placeholder="Full name" wire:model.lazy="contactName">
                                    @error('contactName')
                                        <div id="invalidcontactNameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <label for="email">Email</label> 
                                    <input class="form-control @error('contactEmail') is-invalid @enderror" id="contactEmail" type="email" placeholder="hello@domain.com" wire:model.lazy="contactEmail">
                                    @error('contactEmail')
                                        <div id="invalidcontactNameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <label for="phone">Phone Number</label>
                                    <input class="form-control @error('contactNumber') is-invalid @enderror" id="contactNumber" type="text" placeholder="Full number" wire:model.lazy="contactNumber">
                                    @error('contactNumber')
                                        <div id="invalidcontactNumberFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    <input type="text" class="form-control" id="project" placeholder="Project">
                                    <label for="project">Your Project</label>
                                </div>
                            </div> --}}
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating border border-secondary">
                                    {{-- <input class="form-control @error('service_id') is-invalid @enderror" id="service_id" type="number" placeholder="Full Service" wire:model.lazy="service_id"> --}}
                                    <select name="service_id" id="service_id" class="form-control @error('service_id') is-invalid @enderror"  >
                                        <option value="" selected>Select Service</option>
                                        @foreach ($services as $service )
                                            <option value="{{$service->service_id}}">{{$service->serviceName}}</option>
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
                                    {{-- <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>--}}
                                    <label for="message">What can we help you with?</label> 
                                    <textarea class="form-control @error('contactMessage') is-invalid @enderror" id="contactMessage" rows="5" placeholder="Tell us what we can help you with!" spellcheck="false" data-gramm="false" wire:model.lazy="contactMessage"></textarea>
                                    @error('contactMessage')
                                        <div id="invalidcontactNameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit"  class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="contact-map h-100 w-100">
                        <iframe class="h-100 w-100" 
                        style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.811489391845!2d34.7504009758711!3d-0.10602339989292668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa4953b542adb%3A0xd0101db097736d45!2sTuffoam%20Mall!5e0!3m2!1sen!2ske!4v1715257912393!5m2!1sen!2ske" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Address</h4>
                            <p class="mb-0">123 North tower New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Mail Us</h4>
                            <p class="mb-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="d-inline-flex bg-white w-100 border border-secondary p-4">
                        <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                        <div>
                            <h4>Telephone</h4>
                            <p class="mb-0">(+012) 3456 7890 123</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
