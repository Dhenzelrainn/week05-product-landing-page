<section class="relative overflow-hidden bg-[#fffaf3]">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_10%_10%,rgba(233,92,174,0.11),transparent_26%),radial-gradient(circle_at_90%_35%,rgba(155,87,38,0.13),transparent_28%)]"></div>

    <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-5 py-14 lg:grid-cols-[0.92fr_1.08fr] lg:px-8 lg:py-20">
        <div>
            <span class="section-kicker">Homemade Goodness, Happier Days</span>
            <h1 class="mt-5 max-w-2xl text-4xl font-extrabold leading-[1.06] tracking-[-0.04em] text-[#402117] sm:text-5xl lg:text-6xl">
                Crinkles &amp; Banana Cupcakes Made with <span class="text-[#e95cae]">Love</span>
            </h1>
            <p class="mt-5 max-w-xl text-base leading-7 text-[#65493d] sm:text-lg">
                Soft, moist, chewy, and chocolatey homemade treats from C'Bites — made for simple cravings, sharing, and sweet moments.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <x-button :href="route('contact')">Order Now</x-button>
                <x-button :href="route('products')" variant="secondary">View Products</x-button>
            </div>

            <div class="mt-10 grid max-w-xl grid-cols-3 gap-3 text-sm">
                <div class="mini-proof"><span>♡</span><strong>100% Homemade</strong></div>
                <div class="mini-proof"><span>♨</span><strong>Freshly Baked</strong></div>
                <div class="mini-proof"><span>✦</span><strong>Affordable Treats</strong></div>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -left-6 -top-6 h-28 w-28 rounded-full bg-[#f9c9df]/50 blur-2xl"></div>
            <div class="overflow-hidden rounded-[2.25rem] border border-white/70 bg-white p-3 shadow-[0_25px_80px_rgba(90,45,29,0.15)]">
                <img
                    src="{{ asset('images/crinkles-closeup.webp') }}"
                    alt="C'Bites chocolate crinkles"
                    class="h-[430px] w-full rounded-[1.8rem] object-cover object-center sm:h-[520px]"
                >
            </div>
            <div class="absolute -bottom-5 left-5 rounded-2xl bg-white px-5 py-4 shadow-xl">
                <p class="font-hand text-xl text-[#7d432b]">Small bites, big happiness!</p>
            </div>
            <div class="absolute -right-3 top-5 hidden rotate-6 rounded-2xl bg-[#fff2f7] px-4 py-3 text-center shadow-md sm:block">
                <p class="font-hand text-xl leading-5 text-[#8b432e]">Good food,<br>brighter days!</p>
            </div>
        </div>
    </div>
</section>
