@props(['href' => '#', 'variant' => 'primary'])
<a href="{{ $href }}"
    {{ $attributes->class(['btn', 'btn-outline' => $variant === 'secondary']) }}>{{ $slot }}</a>
