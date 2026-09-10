<section id="pricing" class="section">
    <div class="shell">
        <div class="section-heading reveal"><span class="section-kicker">A Treat for Every Moment</span>
            <h2>Treats for Every Craving</h2>
            <p>Just for you, a little gift, or something to share.</p>
        </div>
        <div class="pricing-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <x-pricing-card name="Single Orders" price="₱25" unit="piece" :features="['One banana cupcake', 'Soft and freshly baked', 'Perfect for a little craving']" />
            <x-pricing-card name="Boxes" price="₱100" unit="box" :features="['Banana cupcakes to share', 'Made-to-order batch', 'Great for gifts and gatherings']" :featured="true"
                delay="0.1" />
            <x-pricing-card name="Packages" price="₱100" unit="package" :features="['Homemade chocolate crinkles', 'Soft, chewy chocolate centers', 'Packed for your merienda']" delay="0.2" />
        </div>
        <p class="pricing-note">Sample menu prices. Message us to confirm current prices, box quantities, and
            availability.</p>
    </div>
</section>
