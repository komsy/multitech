<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <title>{{env('APP_NAME', 'Multitech Solutions (K) Ltd')}}</title>

        
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="css/frontend/owl.carousel.min.css" rel="stylesheet">
        <link href="css/frontend/animate.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/frontend/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/frontend/style.css" rel="stylesheet">
        <link href="css/frontend/main.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>    
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 px-4">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-secondary display-6"><i class="fas fa-city text-primary me-3"></i>Constra</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <a href="" class="nav-item nav-link active ">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                        <!-- <a href="project.html" class="nav-item nav-link">Projects</a> -->
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    
                    <div class="d-none d-xl-flex flex-shirink-0 ml-5">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite">
                                <i class="fa fa-phone-alt  fa-2x"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px;">
                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="">Have any questions?</span>
                            <span class="text-secondary">Call: + 0123 456 7890</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                        <!-- <button class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                        <a href="#" class="btn btn-secondary py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Get a Quate</a>
                    </div>
                    
                </div>
            </nav>
            
        </div> 
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <!-- Modal Search End -->

        <!-- Carousel Start -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
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

        <!-- Facts Start -->
        <div class="container-fluid facts pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                <i class="fa fa-users text-secondary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Happy Clients</h5>
                                <h1>
                                    <span class="text-white mb-0" data-toggle="counter-up">456</span>
                                     <span class="h1 fw-bold text-white">+</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                            <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-secondary mb-0">Projects Done</h5>
                                <h1>
                                    <span class="mb-0" data-toggle="counter-up">456</span>
                                     <span class="h1 fw-bold ">+</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-secondary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Win Awards</h5>
                                <h1>
                                    <span class="text-white mb-0" data-toggle="counter-up">456</span>
                                     <span class="h1 fw-bold text-white">+</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="about-item-image d-flex">
                            <img src="img/about.jpg" class="img-1 img-fluid w-50"  alt="">
                            <img src="img/about-3.jpg" class="img-2 img-fluid w-50"  alt="">
                            <div class="about-item-image-content">
                                <img src="img/about-1.png" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="about-item-content">
                            <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE CONSTRUCTION COMPANY</p>
                            <h2 class="display-4 text-capitalize mb-3">Making your vision come true at the basics.</h2>
                            <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="pb-4 mb-4 border-bottom">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="about-item-content-img">
                                            <img src="img/about-2.jpg" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-flex mb-4">
                                            <div class="text-secondary">
                                                <i class="fas fa-user-shield fa-3x"></i>
                                            </div>
                                            <h4 class="ms-3">Building quality standards</h4>
                                        </div>
                                        <div class="d-flex">
                                            <div class="text-secondary">
                                                <i class="fas fa-users-cog fa-3x"></i>
                                            </div>
                                            <h4 class="ms-3">Certified engineer’s team</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-0 gx-4 justify-content-between pb-4">
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Emploies</p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual Pass Programs</p>
                                    <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost effective</p>
                                </div>
                            </div>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Features Start -->
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
        <!-- Features End -->
    
        
        <!-- Services Start -->
        <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-secondary">Our Services</h5>
                    <h1>Services Built Specifically For Your Business</h1>
                </div>
                <div class="row g-5 services-inner">
                    @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <img src="{{ asset('/storage/'.$service->serviceImage)}}" class="img-fluid w-100 pt-3 ps-3" alt="">

                                    {{-- <i class="fa fa-code fa-7x mb-4 text-primary"></i> --}}
                                    <h4 class="mb-3">{{ $service->serviceHeading }}</h4>
                                    <p class="mb-4">{!! html_entity_decode ( $service->serviceDescription) !!}</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Projects Start -->
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
        <!-- Projects End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Testimonials</p>
                    <h2 class="display-4 text-capitalize mb-3">Our clients reviews.</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.4s">
                    @foreach ($testimonials as $testimony)
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0"> {!! html_entity_decode ( $testimony->testimonial) !!} </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="{{ asset('/storage/'.$testimony->testmonialImage)}}" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark">{{ $testimony->name }} </h4>
                                    <p class="m-0 pb-3">{{ $testimony->designation }}</p>
                                    {{-- <div class="d-flex text-secondary pe-5">
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
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
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
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Latest Projects</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> testimonial</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Our Services</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> General Construction</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Property Maintenance</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Project Managment</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Virtual Design & Build</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Residential Construction</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Preconstruction</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Design Build</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
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
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
  
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/frontend/wow.min.js"></script>
        <script src="js/frontend/easing.min.js"></script>
        <script src="js/frontend/waypoints.min.js"></script>
        <script src="js/frontend/counterup.min.js"></script>
        <script src="js/frontend/owl.carousel.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/frontend/main.js"></script>
    </body>
</html>
