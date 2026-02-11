<html>
<head>
    <title>Billie Eilish</title>

    @vite(['resources/js/app.js', 'resources/scss/app.scss'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


    @stack('styles')
</head>
<body>

<header>
    @include('components.sections.navigation')
</header>

<div id="app">
    <main>
        <section>
            @yield('content')
        </section>
    </main>


    @include('components.sections.footer')
</div>

@stack('fixed-elements')

@stack('scripts')

</body>

</html>

