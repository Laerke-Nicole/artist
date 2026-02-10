@extends('errors.layout')

@section('message')

    <div class="container-fluid">
        <div class="row vh-100">
            <!-- left side with message -->
            <div class="col-12 col-lg-5 d-flex flex-column justify-content-center align-items-start">
                <div class="d-flex flex-column w-100">
                    <div class="w-100">
                        <p class="fs-5 mb-2 text-secondary">503</p>
                        <h1 class="fs-60 mb-3">Service unavailable</h1>
                        <p class="fs-4 mb-5">We're currently down for maintenance. Please try again later.</p>
                        <div>
                            <a href="{{ route('home') }}" class="text-decoration-underline-hover d-flex gap-1 fs-5 align-items-center text-light">
                                <i class="bi bi-arrow-left-short fs-3"></i>
                                Go back to home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
