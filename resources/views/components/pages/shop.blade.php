@extends('layouts.app')

@section('content')

    <x-sections.subhero title="Shop merch & perfumes">
        {{ Breadcrumbs::render('shop') }}
    </x-sections.subhero>

    @include('components.sections.shop-shortcuts')

    @include('components.sections.shop-selected-pieces')

    @include('components.sections.shop-item-cards')

@endsection
