@extends('layouts.app')

@section('content')

    <x-sections.subhero title="All of Billie's work" content="Cras porta velit vitae aliquam sodales. In eget urna lectus. Maecenas ut aliquam mi. Aenean consequat magna id ultrices auctor. Nunc condimentum est vel interdum accumsan. ">
        {{ Breadcrumbs::render('discography') }}
    </x-sections.subhero>

    @include('components.sections.discography-list')


@endsection
