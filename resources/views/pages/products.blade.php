@extends('layouts.app')
@section('title', "Products | C'Bites")
@section('content')
    <x-navbar />
    <main id="main-content"><x-products :products="$products" /><x-cta-order /></main><x-footer />
@endsection
