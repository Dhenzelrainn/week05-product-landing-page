<section class="section cta-section" aria-labelledby="order-heading">
    <div class="shell">
        <div class="order-banner grid items-center lg:grid-cols-2 reveal">
            <div class="order-copy"><span class="eyebrow">Happiness is a little bite away</span>
                <h2 id="order-heading">Order Now! <span class="floating-heart" aria-hidden="true">♡</span></h2>
                <p>Make today a little sweeter. Message us for your favorite treats, freshly prepared with love.</p>
                <div class="actions flex flex-wrap gap-3"><x-button :href="route('contact')">Message Us</x-button><x-button
                        :href="route('home') . '#products'" variant="secondary">View Products</x-button></div>
            </div>
            <img src="{{ asset('images/banana-tray-2.webp') }}" alt="A freshly baked batch of banana cupcakes"
                width="650" height="500" loading="lazy">
        </div>
    </div>
</section>
