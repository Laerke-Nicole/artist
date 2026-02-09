<html>
<head>
    <title>Billie Eilish</title>

    @vite(['resources/js/app.js', 'resources/scss/app.scss'])

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

