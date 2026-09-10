@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $base = 'inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold transition duration-200 focus:outline-none focus:ring-4 focus:ring-pink-200';
    $variants = [
        'primary' => 'bg-[#e95cae] text-white shadow-sm hover:-translate-y-0.5 hover:bg-[#d94b9e] hover:shadow-md',
        'secondary' => 'border border-[#9b5726]/30 bg-white/80 text-[#5a2d1d] hover:-translate-y-0.5 hover:bg-white',
        'dark' => 'bg-[#5a2d1d] text-white hover:-translate-y-0.5 hover:bg-[#452116]',
    ];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $base.' '.($variants[$variant] ?? $variants['primary'])]) }}>
    {{ $slot }}
</a>
