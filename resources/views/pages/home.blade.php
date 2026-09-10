@extends('layouts.app')

@section('title', "C'Bites | Homemade Crinkles & Banana Cupcakes")

@section('content')
<x-navbar />
<main>
    <x-hero />

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <span class="section-kicker">Why Choose C'Bites?</span>
                <h2 class="section-title">More Than Just Treats</h2>
                <p class="section-copy">Simple homemade snacks made to be soft, moist, chewy, chocolatey, and easy to enjoy.</p>
            </div>
            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <x-feature-card icon="⌂" title="Homemade Goodness" description="Prepared in small batches with a homemade touch." />
                <x-feature-card icon="♡" title="Soft & Moist" description="Comforting texture in every banana cupcake and crinkle." />
                <x-feature-card icon="✦" title="Affordable Treats" description="Simple snacks made to be easy to enjoy and share." />
                <x-feature-card icon="▦" title="Two Crowd Favorites" description="Choose from chocolate crinkles and banana cupcakes." />
                <x-feature-card icon="♨" title="Made-to-Order" description="Message ahead so your order can be prepared fresh." />
                <x-feature-card icon="✿" title="Perfect for Sharing" description="Great for merienda, gifts, small gatherings, and cravings." />
            </div>
            <div class="mt-9 text-center"><x-button :href="route('features')" variant="secondary">See All Features</x-button></div>
        </div>
    </section>

    <section class="border-y border-[#8c4b2f]/10 bg-white/50 py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="section-kicker">Our Products</span>
                    <h2 class="section-title">A Little Bite of Happiness</h2>
                    <p class="section-copy max-w-2xl">Featuring the real product photos provided by C'Bites.</p>
                </div>
                <x-button :href="route('products')" variant="secondary">View All Products</x-button>
            </div>
            <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <x-product-card image="crinkles-closeup.webp" name="Chocolate Crinkles" meta="Soft • chewy • chocolatey • per package" />
                <x-product-card image="crinkles-stack.webp" name="Classic Crinkles" meta="Homemade • powdered • per package" />
                <x-product-card image="banana-box-1.webp" name="Banana Cupcakes" meta="Moist • chocolate-topped • per piece or box" />
                <x-product-card image="banana-tray-1.webp" name="Banana Cupcake Batch" meta="Freshly baked • ideal for sharing" />
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <span class="section-kicker">What Customers Say</span>
                <h2 class="section-title">Sweet Words, Happier Hearts</h2>
                <p class="section-copy">Customer photos and names provided for the project.</p>
            </div>
            <div class="mt-10 grid gap-5 md:grid-cols-3">
                <x-testimonial-card image="customer-1.webp" name="Shaeena Cordova" review="Super sarap ng crinkles! Malambot, chewy, at hindi masyadong matamis. Will order again!" />
                <x-testimonial-card image="customer-2.webp" name="Rose Ann Mae" review="The banana cupcakes are soft, moist, and chocolatey. Perfect for snacks and sharing." />
                <x-testimonial-card image="customer-3.webp" name="Mark Madamo" review="Affordable and delicious homemade treats. Fresh, satisfying, and great for merienda." />
            </div>
            <div class="mt-9 text-center"><x-button :href="route('testimonials')" variant="secondary">Read Testimonials</x-button></div>
        </div>
    </section>

    <section class="pb-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="grid overflow-hidden rounded-[2.25rem] bg-[#5a2d1d] text-white lg:grid-cols-[1fr_0.8fr]">
                <div class="p-8 sm:p-12 lg:p-14">
                    <span class="inline-flex rounded-full bg-white/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.12em]">Ready to satisfy your cravings?</span>
                    <h2 class="mt-5 text-4xl font-extrabold tracking-tight sm:text-5xl">Order Your Favorites Today!</h2>
                    <p class="mt-4 max-w-xl text-white/75">Message C'Bites or call directly to ask about availability, pickup, or delivery arrangements.</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <x-button :href="route('contact')">Message Us</x-button>
                        <x-button href="tel:+639946596224" variant="secondary">Call 0994-659-6224</x-button>
                    </div>
                </div>
                <img src="{{ asset('images/banana-tray-2.webp') }}" alt="Fresh C'Bites banana cupcakes" class="h-full min-h-[320px] w-full object-cover">
            </div>
        </div>
    </section>
</main>
<x-footer />
@endsection
