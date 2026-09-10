@props(['icon', 'title', 'description'])

<article class="group rounded-3xl border border-[#8c4b2f]/10 bg-white/80 p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#fff0f7] text-2xl transition group-hover:scale-105">
        {{ $icon }}
    </div>
    <h3 class="mt-5 text-lg font-bold text-[#462217]">{{ $title }}</h3>
    <p class="mt-2 text-sm leading-6 text-[#70564b]">{{ $description }}</p>
</article>
