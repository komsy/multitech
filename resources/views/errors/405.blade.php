@extends('backend.layouts.error_app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Error Redirection</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card card-accent-info">
                             <div class="card-header" style="height:50px;">
                                 <i class="fa fa-align-justify"></i>
                                 Error 405
                             <a class="btn btn-danger text-white pull-right" href="{{ route('home') }}"><i class="fa fa-chevron-left"></i> Go Home</a>
                             </div>
                             <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3"></div>
                                    <div class="form-group col-sm-6 col-md-6"  >  
                                        <!-- <input type="text" disabled class="form-control bg-warning text-center centered" value="Sorry, Operation failed contact Admin!" style="color:black;" > -->
                                    <img src="{{ asset('/public/images/account/405.gif') }}" style="margin-top:-1rem;" >    
                                            
                                    </div>
                                </div>                                
                             </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
