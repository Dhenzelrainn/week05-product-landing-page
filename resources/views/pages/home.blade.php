@extends('layouts.app')

@section('title', "C'Bites | Homemade Goodness, Happier Days")

@section('content')
    <x-navbar />

    <main id="main-content">
        <x-hero />
        <x-why-choose-us />
        <x-products :products="$products" />
        <x-pricing />
        <x-testimonials />
        <x-cta-order />
    </main>

    <x-footer />
@endsection
