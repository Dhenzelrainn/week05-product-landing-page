<section id="home" class="cb-hero">
    <div class="shell cb-hero-grid">

        {{-- LEFT CONTENT --}}
        <div class="cb-hero-copy" data-reveal>
            <p class="cb-eyebrow">
                Homemade treats, happier days
            </p>

            <h1 class="cb-display">
                <span>Goodness</span>
                <span class="cb-display-pink">Comes in</span>
                <span>
                    Bites.
                    <i aria-hidden="true">♡</i>
                </span>
            </h1>

            <p class="cb-hero-text">
                Homemade banana treats and chocolate crinkles, made with love.
            </p>

            <div class="cb-actions">

                <x-button :href="route('contact')">
                    Order Now
                    <span aria-hidden="true">→</span>
                </x-button>

                <x-button href="#products" variant="secondary">
                    Our Treats
                </x-button>

            </div>
        </div>


        {{-- RIGHT HERO IMAGE --}}
        <div
            class="cb-hero-art"
            data-reveal
            style="--reveal-delay: .08s"
        >

            <div
                class="cb-paper-backdrop"
                aria-hidden="true">
            </div>

            <figure class="cb-hero-photo-wrap">

                <img
                    class="cb-hero-photo"
                    src="{{ asset('images/banana-box-2.webp') }}"
                    alt="C'Bites homemade banana chocolate treats"
                    width="900"
                    height="720"
                    fetchpriority="high"
                    style="
                        object-fit: cover;
                        object-position: center 48%;
                    "
                >

            </figure>


            {{-- SMALL STICKY NOTE --}}
            <div
                class="cb-sticky-note"
                aria-hidden="true"
            >
                <span>Real Bananas</span>
                <span>Real Happiness</span>
                <b>♡</b>
            </div>


            {{-- SMALL DOODLE ACCENT --}}
            <span
                class="cb-scribble cb-scribble-one"
                aria-hidden="true">
            </span>

        </div>

    </div>
</section>