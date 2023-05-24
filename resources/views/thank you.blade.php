@extends('layout.masterauth')
@section('title')
    Thank you
@endsection
@section('content')
<div class="bg-body min-vh-100">
<div class="d-flex flex-column flex-root">
    
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10">
            <!--begin::Logo-->
            <a href="" class="mb-12">
                <img alt="Logo" src="{{asset('media/Kaliper sticker.png')}}" class="img-fluid mh-150px" />
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-white-transparent-75 rounded shadow-sm p-10 p-lg-15 mx-auto z-index-2">
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Thank you for ordering</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <a href="{{ route('order.index') }}" class="btn btn-primary mt-3">Back to Home</a>
                        <!--end::Submit button-->
                    </div>
                    <!--end::Actions-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        
    </div>
    <!--end::Authentication - Sign-in-->
</div>
@endsection