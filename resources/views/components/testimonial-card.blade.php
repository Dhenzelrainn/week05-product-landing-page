@props(['image', 'name', 'review', 'position' => "C'Bites Customer", 'delay' => 0])
<article class="testimonial-card reveal rounded-3xl shadow-sm" style="--delay: {{ $delay }}s">
    <div class="review-top"><span class="stars" aria-label="5 out of 5 stars">★★★★★</span><span class="quote-mark"
            aria-hidden="true">“</span></div>
    <blockquote>{{ $review }}</blockquote>
    <div class="customer flex items-center gap-4"><img src="{{ asset('images/' . $image) }}" alt="{{ $name }}"
            width="56" height="56" loading="lazy">
        <div>
            <h3>{{ $name }}</h3>
            <p>{{ $position }}</p>
        </div>
    </div>
</article>
