@extends('errors.layout')

@section('message')

    <div class="container-fluid">
        <div class="row vh-100">
            <!-- left side with message -->
            <div class="col-12 col-lg-5 d-flex flex-column justify-content-center align-items-start">
                <div class="d-flex flex-column w-100">
                    <div class="w-100">
                        <p class="fs-5 mb-2 text-secondary">404</p>
                        <h1 class="fs-60 mb-3">Page not found</h1>
                        <p class="fs-4 mb-5">Sorry, we couldn't find the page.</p>
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
