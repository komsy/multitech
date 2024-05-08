       <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    @if ($homepage->newsletterShow == 1)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <div class="footer-item">
                                    <h4 class="text-white mb-4">Newsletter</h4>
                                    <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                    <div class="position-relative mx-auto">
                                        <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                        <button type="button" class="btn btn-secondary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Our Services</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> General Consultation</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Easy POS Software</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tally Software</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Pact Software</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> CCTV Installation</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Solar Installation</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tims Devices</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 82, Muthithi, Nairobi</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@multitech.co.ke</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@multitech.co.ke</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="footer-btn d-flex align-items-center">
                                <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square me-0" href=""><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> <a class="fw-medium text-light"
                            href="https://multitech.co.ke">{{env('APP_NAME', 'Multitech Solutions (K) Ltd')}}</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Designed By <a class="fw-medium text-light" href="#">Komtech</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->