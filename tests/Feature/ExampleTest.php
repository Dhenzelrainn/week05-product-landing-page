<?php

namespace Tests\Feature;

use App\Models\Product;
use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_displays_seeded_catalog_and_order_sections(): void
    {
        $this->seed(ProductSeeder::class);
        $this->get('/')->assertOk()
            ->assertSee('A Little Bite of Happiness')
            ->assertSee('Chocolate Crinkles')
            ->assertSee('Choco Chip Banana Cupcakes')
            ->assertSee('Treats for Every Craving')
            ->assertSee('data-category="crinkles"', false);
    }

    public function test_seeder_is_repeatable_and_product_details_use_slug(): void
    {
        $this->seed(ProductSeeder::class);
        $this->seed(ProductSeeder::class);
        $this->assertDatabaseCount('products', 4);
        $product = Product::where('slug', 'chocolate-crinkles')->firstOrFail();
        $this->assertStringEndsWith('/products/chocolate-crinkles', route('products.show', $product));
        $this->get('/products/chocolate-crinkles')->assertOk()->assertSee('Chocolate Crinkles');
        $this->get('/products/not-a-real-product')->assertNotFound();
    }

    public function test_existing_standalone_pages_still_render(): void
    {
        $this->seed(ProductSeeder::class);
        foreach (['/features', '/products', '/pricing', '/testimonials', '/contact', '/sign-in'] as $uri) {
            $this->get($uri)->assertOk();
        }
    }
}
