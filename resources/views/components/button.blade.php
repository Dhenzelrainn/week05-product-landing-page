@props([
    'href' => '#',
    'variant' => 'primary',
])

<a href="{{ $href }}"
    {{ $attributes->class([
        'cb-btn',
        'cb-btn-primary' => $variant === 'primary',
        'cb-btn-outline' => $variant === 'secondary',
    ]) }}>
    {{ $slot }}
</a>
