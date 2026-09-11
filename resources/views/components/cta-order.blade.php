<section class="cb-cta-section" aria-labelledby="order-heading">
    <div class="shell">
        <div class="cb-cta-band" data-reveal>
            <div class="cb-cta-heading">
                <p>Ready for a</p>
                <h2 id="order-heading">Sweeter Day?</h2>
            </div>

            <p class="cb-cta-copy">Start with a treat, check the packages, or message C'Bites directly.</p>

            <div class="cb-cta-actions">
                <x-button :href="route('contact')">
                    Get Started <span aria-hidden="true">→</span>
                </x-button>
                <x-button href="#contact" variant="secondary">Contact Us</x-button>
                <x-button href="#pricing" variant="secondary">View Pricing</x-button>
            </div>

            <img class="cb-cta-mascot"
                src="{{ asset('images/ui/doodle-girl.svg') }}"
                alt=""
                aria-hidden="true">
        </div>
    </div>
</section>
