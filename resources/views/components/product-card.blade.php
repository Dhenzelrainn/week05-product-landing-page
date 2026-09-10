@props(['image', 'name', 'meta'])

<article class="overflow-hidden rounded-3xl border border-[#8c4b2f]/10 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
    <div class="aspect-[4/3] overflow-hidden bg-[#f7eee7]">
        <img src="{{ asset('images/'.$image) }}" alt="{{ $name }}" class="h-full w-full object-cover transition duration-500 hover:scale-105">
    </div>
    <div class="p-5">
        <h3 class="text-lg font-bold text-[#462217]">{{ $name }}</h3>
        <p class="mt-1 text-sm text-[#7a5d50]">{{ $meta }}</p>
        <a href="sms:+639946596224" class="mt-5 inline-flex w-full items-center justify-center rounded-full bg-[#e95cae] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#d94b9e]">Ask / Order</a>
    </div>
</article>
