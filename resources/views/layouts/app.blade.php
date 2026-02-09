<html>
<head>
    <title>Billie Eilish</title>

    @vite(['resources/js/app.js', 'resources/scss/app.scss'])

    @stack('styles')
</head>
<body>

<div id="app">
    <header>
        @include('components.sections.navigation')
    </header>

    <main>
        <section class="container-fluid">
            @yield('content')
        </section>
    </main>


    @include('components.sections.footer')
</div>

@stack('fixed-elements')

@stack('scripts')

</body>

</html>

