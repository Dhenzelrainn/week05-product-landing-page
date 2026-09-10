@props(['icon', 'title', 'description', 'delay' => 0])
<article class="feature-card reveal rounded-3xl shadow-sm hover:shadow-lg" style="--delay: {{ $delay }}s">
    <span class="feature-icon" aria-hidden="true">{{ $icon }}</span>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</article>
