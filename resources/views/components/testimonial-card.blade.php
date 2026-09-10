@props([
    'image',
    'name',
    'review',
    'position' => "Happy Customer",
    'delay' => 0,
])

<article class="cb-review-card" data-reveal style="--reveal-delay: {{ $delay }}s">
    <img class="cb-review-photo"
        src="{{ asset('images/' . $image) }}"
        alt="{{ $name }}"
        width="86"
        height="86"
        loading="lazy">

    <div class="cb-review-content">
        <div class="cb-stars" aria-label="5 out of 5 stars">★★★★★</div>
        <blockquote>“{{ $review }}”</blockquote>
        <p>— {{ $name }}</p>
    </div>
</article>
