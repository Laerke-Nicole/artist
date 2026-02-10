@extends('layouts.app')

@section('content')

    <x-sections.subhero eyebrow="About" title="Billie Eilish">
        {{ Breadcrumbs::render('about') }}
    </x-sections.subhero>

@endsection
