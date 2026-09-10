@props(['products'])
<section id="products" class="section products-section" data-product-section>
    <div class="shell">
        <div class="section-heading reveal"><span class="section-kicker">Fresh from Our Kitchen</span>
            <h2>A Little Bite of Happiness</h2>
            <p>Find your favorite. Or make room for a new one.</p>
        </div>
        <div class="filter-tabs flex flex-wrap justify-center gap-3" role="group" aria-label="Filter products">
            <button type="button" data-filter="all" aria-pressed="true">All</button><button type="button"
                data-filter="crinkles" aria-pressed="false">Crinkles</button><button type="button"
                data-filter="banana-cupcakes" aria-pressed="false">Banana Cupcakes</button>
        </div>
        <p class="sr-only" role="status" data-filter-status>{{ $products->count() }} products</p>
        <div class="product-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-product-grid>
            @forelse($products as $product)
            <x-product-card :product="$product" />@empty<p>Our menu is being prepared. Please message us for
                    availability.</p>
            @endforelse
        </div>
    </div>
</section>
