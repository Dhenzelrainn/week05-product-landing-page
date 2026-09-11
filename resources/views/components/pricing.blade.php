<section id="pricing" class="cb-products-section">
    <div class="shell">
        <div class="cb-products-heading" data-reveal>
            <p class="cb-section-kicker">Choose your treat</p>
            <h2>Packages &amp; <span>Pricing</span></h2>
            <p class="cb-section-intro">Three simple options for solo cravings, sharing, and chocolate lovers.</p>
        </div>

        <div class="cb-products-grid grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <x-pricing-card
                name="Solo Banana Treat"
                image="banana-box-2.webp"
                subtitle="A simple homemade treat for one."
                price="₱25"
                unit="per piece"
                :features="['1 banana treat', 'Freshly baked', 'Chocolate-topped']"
            />

            <x-pricing-card
                name="Banana Treat Box"
                image="banana-four.webp"
                subtitle="A boxed option made for sharing."
                price="₱100"
                unit="per box"
                :features="['Boxed banana treats', 'Homemade batch', 'Ready for sharing']"
                featured="true"
                delay="0.06"
            />

            <x-pricing-card
                name="Crinkles Package"
                image="crinkles-closeup.webp"
                subtitle="Rich, soft, chewy chocolate crinkles."
                price="₱100"
                unit="per package"
                :features="['Chocolate crinkles', 'Soft & chewy texture', 'Packed for sharing']"
                delay="0.12"
            />
        </div>

        <p class="cb-pricing-note">
            Prices shown follow the current project menu. Message C'Bites to confirm availability and package quantities before ordering.
        </p>
    </div>
</section>
