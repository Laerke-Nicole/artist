<div style="height: 70vh; background-image: url('{{ asset('storage/hero.jpg') }}'); background-repeat: no-repeat; background-size: cover;"></div>

<div class="section-spacing bg-success pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                {{ $slot }}
{{--                {{ Breadcrumbs::render('about') }}--}}
                <p class="eyebrow">{{ $eyebrow ?? null }}</p>
                <h1 class="mb-4" style="font-size: 50px">{{ $title ?? null }}</h1>
                <p>{{ $content ?? null }}</p>
            </div>
        </div>
    </div>
</div>
