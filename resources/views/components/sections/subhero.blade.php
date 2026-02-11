<div style="height: 70vh; background-image: url('{{ asset('storage/hero.jpg') }}'); background-repeat: no-repeat; background-size: cover;"></div>

<div class="section-spacing bg-success pt-5 pb-4">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5">
                {{ $slot }}
{{--                {{ Breadcrumbs::render('about') }}--}}
                <p class="eyebrow">{{ $eyebrow ?? null }}</p>
                <h1 class="mb-4" style="font-size: 50px">{{ $title ?? null }}</h1>
                <p>{{ $content ?? null }}</p>
            </div>

            <div class="col-lg-3 offset-lg-4 d-flex d-none d-lg-block">
                <div class="position-relative w-100">
                    <p class="text-info position-absolute end-0" style="bottom: -170px; font-size: 300px; letter-spacing: -0.1em; font-weight: normal; font-family: 'Exo 2', sans-serif;">04</p>
                </div>
            </div>
        </div>
    </div>
</div>
