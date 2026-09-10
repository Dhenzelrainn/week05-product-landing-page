<section id="home" class="hero">
    <div class="hero-blobs" aria-hidden="true"><span></span><span></span><span></span></div>
    <div class="shell hero-grid grid items-center gap-12 lg:grid-cols-2">
        <div class="hero-copy">
            <span class="section-kicker">Homemade Goodness, Happier Days</span>
            <h1>Crinkles &amp;<br>Banana Cupcakes<br>Made with <em>Love</em></h1>
            <p>Soft, chewy crinkles. Moist banana cupcakes. Homemade little treats for your everyday cravings and your
                happiest moments.</p>
            <div class="actions flex flex-wrap gap-3"><x-button :href="route('contact')">Order Now <span
                        aria-hidden="true">↗</span></x-button><x-button href="#products" variant="secondary">View
                    Products</x-button></div>
            <div class="trust-row grid grid-cols-3 gap-3">
                <div><span aria-hidden="true">♡</span><strong>100% Homemade</strong></div>
                <div><span aria-hidden="true">♨</span><strong>Freshly Baked</strong></div>
                <div><span aria-hidden="true">✧</span><strong>Affordable Treats</strong></div>
            </div>
        </div>
        <div class="hero-art">
            <img class="hero-photo" src="{{ asset('images/crinkles-closeup.webp') }}"
                alt="Homemade chocolate crinkles dusted with powdered sugar" width="720" height="800"
                fetchpriority="high">
            <img class="hero-inset" src="{{ asset('images/banana-box-1.webp') }}"
                alt="A box of chocolate-topped banana cupcakes" width="240" height="240">
            <span class="doodle doodle-top">Good Food<br>Brighter Days! <span aria-hidden="true">✧</span></span>
            <span class="doodle doodle-bottom">Small Bites<br>Big Happiness! <span aria-hidden="true">♡</span></span>
        </div>
    </div>
</section>
