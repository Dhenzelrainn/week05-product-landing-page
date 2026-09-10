@props(['name', 'price', 'unit', 'features' => [], 'featured' => false, 'delay' => 0])
<article @class([
    'pricing-card reveal flex flex-col rounded-3xl shadow-sm',
    'featured' => $featured,
]) style="--delay: {{ $delay }}s">
    @if ($featured)
        <span class="popular-badge">Most Popular</span>
    @endif
    <span class="plan-icon" aria-hidden="true">{{ $featured ? '♡' : '✧' }}</span>
    <h3>{{ $name }}</h3>
    <p class="plan-price">{{ $price }}<span>/ {{ $unit }}</span></p>
    <ul>
        @foreach ($features as $feature)
            <li><span aria-hidden="true">✓</span>{{ $feature }}</li>
        @endforeach
    </ul>
    <x-button :href="route('contact', ['order' => $name])" :variant="$featured ? 'primary' : 'secondary'">Order Now</x-button>
</article>
