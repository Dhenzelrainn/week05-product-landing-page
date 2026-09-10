<footer class="bg-[#4a2519] text-white">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-14 md:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div>
            <a href="{{ route('home') }}" class="inline-flex rounded-2xl bg-[#fffaf3] p-2">
                <img src="{{ asset('images/cbites-logo.png') }}" alt="C'Bites logo" class="h-14 w-auto">
            </a>
            <p class="mt-4 max-w-xs text-sm leading-6 text-white/70">Homemade treats for sweeter days — crinkles and banana cupcakes made with care.</p>
        </div>

        <div>
            <h3 class="font-bold">Quick Links</h3>
            <div class="mt-4 grid gap-2 text-sm text-white/70">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <a href="{{ route('features') }}" class="hover:text-white">Features</a>
                <a href="{{ route('products') }}" class="hover:text-white">Products</a>
                <a href="{{ route('pricing') }}" class="hover:text-white">Pricing</a>
                <a href="{{ route('testimonials') }}" class="hover:text-white">Testimonials</a>
                <a href="{{ route('contact') }}" class="hover:text-white">Contact</a>
            </div>
        </div>

        <div>
            <h3 class="font-bold">Contact Us</h3>
            <div class="mt-4 space-y-3 text-sm text-white/70">
                <p>☎ 0994-659-6224</p>
                <p>⌖ Service areas: Cavinti, Sta. Cruz, Calamba</p>
                <p>✉ Direct orders through messages</p>
            </div>
        </div>

        <div>
            <h3 class="font-bold">Ordering</h3>
            <div class="mt-4 space-y-3 text-sm text-white/70">
                <p>Banana cupcakes: per piece or box</p>
                <p>Crinkles: per package</p>
                <p>Message first to confirm availability and schedule.</p>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto flex max-w-7xl flex-col gap-2 px-5 py-5 text-xs text-white/60 sm:flex-row sm:items-center sm:justify-between lg:px-8">
            <p>© {{ date('Y') }} C'Bites. All rights reserved.</p>
            <p>Homemade with ♥ in Laguna.</p>
        </div>
    </div>
</footer>
