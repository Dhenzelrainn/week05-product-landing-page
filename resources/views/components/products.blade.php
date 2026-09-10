@props(['products'])

<section id="products" class="cb-treats-section">
    <div class="shell">
        <div class="cb-treats-layout">
            <div class="cb-treats-copy" data-reveal>
                <p class="cb-section-kicker">Our treats</p>
                <h2>Our <span>Treats</span></h2>
                <p>Simple ingredients.<br>Extra special bites.</p>
            </div>

            <figure class="cb-polaroid cb-polaroid-banana" data-reveal style="--reveal-delay: .06s">
                <span class="cb-tape" aria-hidden="true"></span>
                <img src="{{ asset('images/banana-tray-1.webp') }}"
                    alt="Freshly baked banana treats topped with chocolate"
                    width="680"
                    height="540"
                    loading="lazy">
                <figcaption>
                    <strong>Banana Treats</strong>
                    <span>Moist. Chocolatey.</span>
                </figcaption>
            </figure>

            <figure class="cb-polaroid cb-polaroid-crinkles" data-reveal style="--reveal-delay: .12s">
                <span class="cb-tape" aria-hidden="true"></span>
                <img src="{{ asset('images/crinkles-cut.webp') }}"
                    alt="Chocolate crinkles with a soft chocolate center"
                    width="680"
                    height="540"
                    loading="lazy">
                <figcaption>
                    <strong>Chocolate Crinkles</strong>
                    <span>Soft. Chewy. Timeless.</span>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="cb-paper-edge" aria-hidden="true"></div>
</section>
