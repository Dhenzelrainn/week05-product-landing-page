@props(['product'])
<article class="product-card" data-category="{{ $product->category }}">
    <a class="product-image" href="{{ route('products.show', $product) }}"><img
            src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy" width="600"
            height="480"></a>
    <div class="product-body">
        <p class="product-category">{{ $product->category === 'crinkles' ? 'Crinkles' : 'Banana Cupcakes' }}</p>
        <h3>{{ $product->name }}</h3>
        <p class="price">₱{{ number_format($product->price, 0) }} <span>/ {{ $product->unit }}</span></p><x-button
            :href="route('products.show', $product)">View Details</x-button>
    </div>
</article>
