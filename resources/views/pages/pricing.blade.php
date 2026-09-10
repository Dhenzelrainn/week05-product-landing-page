@extends('layouts.app')
@section('title', "Pricing | C'Bites")
@section('content')
<x-navbar />
<main>
    <x-page-hero kicker="Simple Ordering" title="Treats for Every Craving" description="C'Bites offers banana cupcakes per piece or by box, while crinkles are available by package. The prices shown below are sample project values until the business confirms official prices." image="banana-four.webp">
        <div class="mt-7"><x-button :href="route('contact')">Confirm Current Prices</x-button></div>
    </x-page-hero>

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="rounded-2xl border border-[#e95cae]/20 bg-[#fff1f7] px-5 py-4 text-sm leading-6 text-[#704b5e]">
                <strong>School-project note:</strong> ₱25, ₱250, and ₱150 are temporary sample prices. Replace them once C'Bites provides the official price list.
            </div>
            <div class="mt-10 grid gap-5 lg:grid-cols-3">
                <x-pricing-card name="Single Banana Cupcake" price="₱25" unit="per piece" :features="['Freshly baked', 'Soft and moist', 'Easy single-order option']" />
                <x-pricing-card name="Banana Cupcake Box" price="₱250" unit="per box" :features="['Great for sharing', 'Made-to-order', 'Ideal for gifts or gatherings']" :featured="true" />
                <x-pricing-card name="Crinkles Package" price="₱150" unit="per package" :features="['Chocolatey and chewy', 'Homemade batch', 'Convenient packaged order']" />
            </div>
        </div>
    </section>
</main>
<x-footer />
@endsection
