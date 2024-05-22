<?php
    $routeName = Request::route()->getName();
    $pageTitles = [
        'home' => 'Home',
        'about' => 'About Us',
        'service' => 'Our Services',
        'contact' => 'Contact Us'
        // Add more route names and corresponding page titles as needed
    ];
    $activePage = $pageTitles[$routeName] ?? '';
?>
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{ $activePage }}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-warning">{{ $activePage }}</li>
        </ol>    
    </div>
</div>

