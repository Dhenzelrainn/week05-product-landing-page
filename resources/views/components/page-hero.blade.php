@props(['kicker', 'title', 'description', 'image' => null])

<section class="relative overflow-hidden border-b border-[#8c4b2f]/10 bg-[#fff7f0]">
    <div
        class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_12%_18%,rgba(233,92,174,0.11),transparent_24%),radial-gradient(circle_at_90%_24%,rgba(153,84,42,0.10),transparent_26%)]">
    </div>
    <div
        class="relative mx-auto grid max-w-7xl items-center gap-10 px-5 py-14 lg:grid-cols-[1fr_0.72fr] lg:px-8 lg:py-20">
        <div>
            <span class="section-kicker">{{ $kicker }}</span>
            <h1
                class="mt-5 max-w-3xl text-4xl font-extrabold leading-tight tracking-[-0.04em] text-[#402117] sm:text-5xl lg:text-6xl">
                {{ $title }}</h1>
            <p class="mt-5 max-w-2xl text-base leading-8 text-[#705247] sm:text-lg">{{ $description }}</p>
            {{ $slot }}
        </div>

        @if ($image)
            <div
                class="overflow-hidden rounded-[2rem] border border-white bg-white p-2 shadow-[0_25px_70px_rgba(90,45,29,0.13)]">
                <img src="{{ asset('images/' . $image) }}" alt="C'Bites product"
                    class="h-[300px] w-full rounded-[1.55rem] object-cover sm:h-[380px]">
            </div>
        @endif
    </div>
</section>
