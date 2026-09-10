@props([
    'image',
    'name',
    'position' => "C'Bites Customer",
    'review',
])

<article class="testimonial-card rounded-3xl border border-[#8c4b2f]/10 bg-white p-6 shadow-sm">
    <div class="flex items-center gap-4">
        <img
            src="{{ asset('images/' . $image) }}"
            alt="{{ $name }} customer photo"
            class="testimonial-photo h-16 w-16 shrink-0 rounded-2xl object-cover"
            loading="lazy"
        >

        <div class="min-w-0">
            <p class="font-bold text-[#462217]">{{ $name }}</p>
            <p class="mt-0.5 text-xs text-[#8b6a5c]">{{ $position }}</p>
        </div>
    </div>

    <p class="mt-5 text-sm leading-6 text-[#65493d]">“{{ $review }}”</p>

    <div class="mt-4 text-sm tracking-widest text-[#e7a23a]" aria-label="5 out of 5 stars">
        ★★★★★
    </div>
</article>
