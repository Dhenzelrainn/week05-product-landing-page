@props([
    'icon',
    'title',
    'description',
    'delay' => 0,
])

<article class="cb-feature-card" data-reveal style="--reveal-delay: {{ $delay }}s">
    <span class="cb-feature-icon" aria-hidden="true">
        <img src="{{ asset('images/ui/' . $icon) }}" alt="">
    </span>

    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</article>
