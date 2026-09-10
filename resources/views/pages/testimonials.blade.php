@extends('layouts.app')
@section('title', "Testimonials | C'Bites")
@section('content')
<x-navbar />
<main>
    <x-page-hero kicker="Customer Reviews" title="Sweet Words, Happier Hearts" description="Meet the three customers featured in the C'Bites school project. Their photos and names are shown using the details you provided." image="crinkles-cut.webp" />

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="grid gap-5 md:grid-cols-3">
                <x-testimonial-card image="customer-1.webp" name="Shaeena Cordova" review="Super sarap ng crinkles! Malambot, chewy, at hindi masyadong matamis. Will order again!" />
                <x-testimonial-card image="customer-2.webp" name="Rose Ann Mae" review="The banana cupcakes are soft, moist, and chocolatey. Perfect for snacks and sharing." />
                <x-testimonial-card image="customer-3.webp" name="Mark Madamo" review="Affordable and delicious homemade treats. Fresh, satisfying, and great for merienda." />
            </div>
            <p class="mt-8 text-center text-xs leading-6 text-[#8b6a5c]">Review wording is sample copy for the laboratory project and can be replaced with the customers' exact testimonials later.</p>
        </div>
    </section>
</main>
<x-footer />
@endsection
