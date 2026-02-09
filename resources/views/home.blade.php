@extends('layouts.app')

@section('content')

    @include('components.sections.hero')

    @include('components.sections.introduction')

    <div class="container">
        <div class="row gy-5 section-spacing">
            <div class="col-lg-4 d-flex flex-column justify-content-center">
                <p class="eyebrow">- Latest release</p>
                <h1 class="mb-4">Hit me hard<br>and soft</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam aspernatur doloremque dolorum ea esse facilis inventore minima numquam odit possimus, quaerat quo. Consequatur ex possimus voluptates! Natus, omnis!</p>
                <div>
                    <a href="" class="btn btn-outline-light">Listen now</a>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-2 position-relative">
                <i class="bi bi-spotify position-absolute display-1 text-secondary z-1" style="bottom: 35px; left: -1rem;"></i>
                <div class="p-2 border border-light">
                    <img src="https://picsum.photos/500/525" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>

    @include('components.sections.shortcuts')

    <div class="container section-spacing">
        <div class="row">
            <div class="col">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa debitis deleniti ea molestiae nihil quibusdam reprehenderit, sequi ullam voluptates.</h2>
            </div>
        </div>
    </div>

    @include('components.sections.tour-list')

    @include('components.sections.discography')

@endsection
