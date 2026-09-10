@props([
    'name',
    'price',
    'unit',
    'features' => [],
    'featured' => false,
])

<article @class([
    'relative flex h-full flex-col rounded-3xl border bg-white p-7 shadow-sm',
    'border-[#e95cae] ring-2 ring-[#e95cae]/10' => $featured,
    'border-[#8c4b2f]/10' => !$featured,
])>
    @if($featured)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[#e95cae] px-4 py-1 text-xs font-bold text-white">Most Popular</span>
    @endif

    <p class="text-sm font-semibold text-[#7d5b4c]">{{ $name }}</p>
    <div class="mt-4">
        <span class="text-4xl font-extrabold tracking-tight text-[#462217]">{{ $price }}</span>
        <span class="ml-1 text-sm text-[#7d5b4c]">{{ $unit }}</span>
    </div>

    <ul class="mt-6 space-y-3 text-sm text-[#62483c]">
        @foreach($features as $feature)
            <li class="flex gap-3"><span class="font-bold text-[#e95cae]">✓</span><span>{{ $feature }}</span></li>
        @endforeach
    </ul>

    <a href="sms:+639946596224" @class([
        'mt-8 inline-flex items-center justify-center rounded-full px-5 py-3 text-sm font-bold transition',
        'bg-[#e95cae] text-white hover:bg-[#d94b9e]' => $featured,
        'border border-[#9b5726]/25 text-[#5a2d1d] hover:bg-[#fff6ef]' => !$featured,
    ])>Order Now</a>
</article>
