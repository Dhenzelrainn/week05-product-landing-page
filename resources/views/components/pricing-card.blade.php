@props([
    'name',
    'image',
    'subtitle',
    'price',
    'unit',
    'features' => [],
    'featured' => false,
    'delay' => 0,
])

<article @class([
        'cb-product-price-card rounded-[26px] shadow-sm transition hover:-translate-y-1',
        'cb-product-price-card-featured' => $featured,
    ])
    data-reveal
    style="--reveal-delay: {{ $delay }}s">

    @if ($featured)
        <span class="cb-product-badge">Most Popular</span>
    @endif

    <div class="cb-product-price-image">
        <img src="{{ asset('images/' . $image) }}"
            alt="{{ $name }}"
            width="620"
            height="450"
            loading="lazy">
    </div>

    <div class="cb-product-price-body">
        <p class="cb-plan-label">Package</p>
        <h3>{{ $name }}</h3>
        <p class="cb-product-subtitle">{{ $subtitle }}</p>

        <div class="cb-price-row">
            <div>
                <strong>{{ $price }}</strong>
                <span>{{ $unit }}</span>
            </div>
        </div>

        @if (count($features))
            <ul class="cb-plan-features" aria-label="{{ $name }} inclusions">
                @foreach ($features as $feature)
                    <li>
                        <span aria-hidden="true">✓</span>
                        {{ $feature }}
                    </li>
                @endforeach
            </ul>
        @endif

        <x-button :href="route('contact', ['order' => $name])">
            Order Now <span aria-hidden="true">→</span>
        </x-button>
    </div>
</article>
