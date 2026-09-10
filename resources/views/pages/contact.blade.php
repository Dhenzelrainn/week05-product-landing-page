@extends('layouts.app')
@section('title', "Contact | C'Bites")
@section('content')
<x-navbar />
<main>
    <x-page-hero kicker="Let's Get in Touch" title="Ready for Something Sweet?" description="C'Bites accepts direct orders through messages. Contact the business first to confirm availability, quantity, pickup or delivery area, and ordering schedule." image="banana-box-2.webp">
        <div class="mt-7 flex flex-wrap gap-3">
            <x-button href="sms:+639946596224">Send a Message</x-button>
            <x-button href="tel:+639946596224" variant="secondary">Call C'Bites</x-button>
        </div>
    </x-page-hero>

    <section class="py-20">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">
            <div class="space-y-4">
                <article class="contact-card"><span>☎</span><div><h3>Contact Number</h3><a href="tel:+639946596224">0994-659-6224</a></div></article>
                <article class="contact-card"><span>⌖</span><div><h3>Service Areas</h3><p>Cavinti, Sta. Cruz, Calamba</p></div></article>
                <article class="contact-card"><span>✉</span><div><h3>How to Order</h3><p>Send a message or place a direct order with C'Bites.</p></div></article>
                <article class="contact-card"><span>♨</span><div><h3>Availability</h3><p>Message first to confirm the current ordering schedule and product availability.</p></div></article>
            </div>

            <form class="rounded-[2rem] border border-[#8c4b2f]/10 bg-white p-6 shadow-sm sm:p-8" data-contact-form>
                <span class="section-kicker">Quick Inquiry</span>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-[#402117]">Send an Order Inquiry</h2>
                <p class="mt-3 text-sm leading-6 text-[#76594c]">Front-end demo form for the laboratory activity. It does not send to a database yet.</p>

                <div class="mt-7 grid gap-5 sm:grid-cols-2">
                    <label class="form-field"><span>Name</span><input type="text" placeholder="Your name" required></label>
                    <label class="form-field"><span>Contact number</span><input type="tel" placeholder="09xx xxx xxxx" required></label>
                    <label class="form-field sm:col-span-2"><span>Product</span><select required><option value="">Choose a product</option><option>Chocolate Crinkles</option><option>Banana Cupcakes</option><option>Both</option></select></label>
                    <label class="form-field sm:col-span-2"><span>Message</span><textarea rows="5" placeholder="Quantity, preferred date, pickup/delivery question..."></textarea></label>
                </div>
                <button type="submit" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#e95cae] px-7 py-3 text-sm font-bold text-white transition hover:bg-[#d94b9e]">Prepare Inquiry</button>
                <p class="mt-4 hidden rounded-xl bg-[#effaf3] px-4 py-3 text-sm text-[#315b3d]" data-form-message>Your inquiry is ready. Since this is a front-end school demo, please use the Message or Call button to contact C'Bites.</p>
            </form>
        </div>
    </section>
</main>
<x-footer />
@endsection
