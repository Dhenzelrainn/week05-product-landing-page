@extends('layouts.app')
@section('title', "Features | C'Bites")
@section('content')
<x-navbar />
<main>
    <x-page-hero kicker="Why Choose C'Bites?" title="More Than Just Treats" description="C'Bites focuses on simple homemade qualities that make every order comforting, shareable, and easy to enjoy." image="crinkles-stack.webp">
        <div class="mt-7"><x-button :href="route('products')">Explore Products</x-button></div>
    </x-page-hero>

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <x-feature-card icon="⌂" title="Homemade Goodness" description="Prepared in small batches with a homemade touch and familiar comfort-food feel." />
                <x-feature-card icon="♡" title="Soft & Moist" description="Banana cupcakes are made for a soft and moist bite, while crinkles stay chewy inside." />
                <x-feature-card icon="✦" title="Affordable Treats" description="Simple treats positioned as an easy option for everyday cravings and sharing." />
                <x-feature-card icon="▦" title="Two Product Favorites" description="Choose between powdered chocolate crinkles and chocolate-topped banana cupcakes." />
                <x-feature-card icon="♨" title="Made-to-Order" description="Customers can message directly before ordering so availability can be confirmed." />
                <x-feature-card icon="✿" title="Perfect for Sharing" description="Suitable for merienda, small gifts, family sharing, school days, and casual gatherings." />
            </div>
        </div>
    </section>
</main>
<x-footer />
@endsection
