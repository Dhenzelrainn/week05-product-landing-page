@extends('layouts.app')
@section('title', $product->name . " | C'Bites")
@section('content')
    <x-navbar />
    <main id="main-content" class="section">
        <div class="shell"><a class="text-link" href="{{ route('products') }}">← All products</a>
            <div class="detail-grid grid gap-10 lg:grid-cols-2 items-center"><img class="detail-photo"
                    src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="700" height="650">
                <div><span class="section-kicker">Made with love</span>
                    <h1 class="section-title">{{ $product->name }}</h1>
                    <p class="section-copy">{{ $product->description }}</p>
                    <p class="plan-price">₱{{ number_format($product->price, 0) }}<span>/ {{ $product->unit }}</span></p>
                    <p class="section-copy">Message us to confirm price, quantity, ingredients, allergens, and your
                        preferred pickup or delivery date.</p>
                    <div class="actions"><x-button :href="route('contact', ['order' => $product->name])">Ask About This Treat</x-button></div>
                </div>
            </div>
        </div>
    </main><x-footer />
@endsection
