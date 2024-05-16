@extends('layouts.errorpage')
@section('code', '403 😭')

@section('title', __('UNAUTHORIZED'))
@section('content')

        <div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                        <h1 class="display-1">403</h1>
                        <h1 class="mb-4">UNAUTHORIZED</h1>
                        <p class="mb-4">We’re sorry, You are not authorised to access the page you requested. Contact Admin!</p>
                        <a class="btn btn-primary py-3 px-5" href="{{ url('/') }}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    
@endsection


