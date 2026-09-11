@props([
    'image',
    'name',
    'review',
    'position' => 'Happy Customer',
    'delay' => 0,
])

<article class="cb-review-card rounded-[22px] shadow-sm" data-reveal style="--reveal-delay: {{ $delay }}s">
    <img class="cb-review-photo"
        src="{{ asset('images/' . $image) }}"
        alt="{{ $name }}"
        width="86"
        height="86"
        loading="lazy">

    <div class="cb-review-content">
        <div class="cb-stars" aria-label="5 out of 5 stars">★★★★★</div>
        <blockquote>“{{ $review }}”</blockquote>
        <p class="cb-review-name">{{ $name }}</p>
        <span class="cb-review-role">{{ $position }}</span>
    </div>
</article>
