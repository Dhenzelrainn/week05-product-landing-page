@extends('layouts.app')
@section('title', "Products | C'Bites")
@section('content')
<x-navbar />
<main>
    <x-page-hero kicker="Real C'Bites Products" title="Crinkles & Banana Cupcakes" description="Browse C'Bites using the actual product photos supplied by the business — no AI-generated food images." image="banana-box-1.webp">
        <div class="mt-7"><x-button :href="route('contact')">Ask About an Order</x-button></div>
    </x-page-hero>

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div>
                <span class="section-kicker">Chocolate Crinkles</span>
                <h2 class="section-title">Soft, Chewy & Chocolatey</h2>
                <p class="section-copy max-w-2xl">C'Bites crinkles are offered by package. Message the business to confirm package size, availability, and current price.</p>
            </div>
            <div class="mt-9 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <x-product-card image="crinkles-closeup.webp" name="Chocolate Crinkles" meta="Close-up • soft center • powdered finish" />
                <x-product-card image="crinkles-stack.webp" name="Classic Crinkles" meta="Stacked batch • homemade • chewy" />
                <x-product-card image="crinkles-plate.webp" name="Crinkles Package" meta="Perfect for sharing • sold by package" />
                <x-product-card image="crinkles-cut.webp" name="Chocolate Center" meta="Rich chocolate interior • powdered outside" />
                <x-product-card image="crinkles-top.webp" name="Fresh Crinkles" meta="Fresh batch • homemade look" />
                <x-product-card image="crinkles-small-stack.webp" name="Small Batch Crinkles" meta="Made-to-order • message for availability" />
            </div>
        </div>
    </section>

    <section class="border-y border-[#8c4b2f]/10 bg-white/50 py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div>
                <span class="section-kicker">Banana Cupcakes</span>
                <h2 class="section-title">Moist Banana Cupcakes with Chocolate</h2>
                <p class="section-copy max-w-2xl">Available per piece or by box. Message C'Bites to confirm quantity options, schedule, and current price.</p>
            </div>
            <div class="mt-9 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <x-product-card image="banana-box-1.webp" name="Banana Cupcake Box" meta="Box presentation • chocolate-topped" />
                <x-product-card image="banana-box-2.webp" name="Four-Piece Box" meta="Great for sharing or gifting" />
                <x-product-card image="banana-tray-1.webp" name="Fresh Banana Cupcakes" meta="Fresh batch • chocolate pieces" />
                <x-product-card image="banana-tray-2.webp" name="Banana Cupcake Batch" meta="Homemade • moist • freshly baked" />
            </div>
        </div>
    </section>
</main>
<x-footer />
@endsection
