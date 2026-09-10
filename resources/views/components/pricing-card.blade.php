@props([
    'name',
    'image',
    'subtitle',
    'price',
    'unit',
    'secondaryPrice' => null,
    'secondaryUnit' => null,
    'featured' => false,
    'delay' => 0,
])

<article @class([
        'cb-product-price-card',
        'cb-product-price-card-featured' => $featured,
    ])
    data-reveal
    style="--reveal-delay: {{ $delay }}s">

    @if ($featured)
        <span class="cb-product-badge">Best seller</span>
    @endif

    <div class="cb-product-price-image">
        <img src="{{ asset('images/' . $image) }}"
            alt="{{ $name }}"
            width="620"
            height="450"
            loading="lazy">
    </div>

    <div class="cb-product-price-body">
        <h3>{{ $name }}</h3>
        <p class="cb-product-subtitle">{{ $subtitle }}</p>

        <div class="cb-price-row">
            <div>
                <strong>{{ $price }}</strong>
                <span>{{ $unit }}</span>
            </div>

            @if ($secondaryPrice)
                <span class="cb-price-divider" aria-hidden="true"></span>

                <div>
                    <strong>{{ $secondaryPrice }}</strong>
                    <span>{{ $secondaryUnit }}</span>
                </div>
            @endif
        </div>

        <x-button :href="route('contact', ['order' => $name])">
            Order Now <span aria-hidden="true">→</span>
        </x-button>
    </div>
</article>
