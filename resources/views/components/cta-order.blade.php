<section class="cb-cta-section" aria-labelledby="order-heading">
    <div class="shell">
        <div class="cb-cta-band" data-reveal>
            <div class="cb-cta-heading">
                <p>Ready for a</p>
                <h2 id="order-heading">Sweeter Day?</h2>
            </div>

            <p class="cb-cta-copy">Order your C'Bites favorites today!</p>

            <x-button :href="route('contact')" class="cb-cta-button">
                Order Now <span aria-hidden="true">→</span>
            </x-button>

            <img class="cb-cta-mascot"
                src="{{ asset('images/ui/doodle-girl.svg') }}"
                alt=""
                aria-hidden="true">
        </div>
    </div>
</section>
