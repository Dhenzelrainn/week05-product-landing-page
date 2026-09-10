<?php
namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Sample prices supplied in the brief; confirm them with the bakery before launch.
        $products = [
            [
                "Chocolate Crinkles",
                "chocolate-crinkles",
                150,
                "package",
                "crinkles-closeup.webp",
                "crinkles",
                "Rich chocolate crinkles with a soft center and a snowy powdered-sugar finish.",
            ],
            [
                "Classic Crinkles",
                "classic-crinkles",
                150,
                "package",
                "crinkles-stack.webp",
                "crinkles",
                "Chewy homemade crinkles, ready to share over coffee or your afternoon merienda.",
            ],
            [
                "Banana Cupcakes",
                "banana-cupcakes",
                25,
                "piece",
                "banana-box-1.webp",
                "banana-cupcakes",
                "Soft, moist banana cupcakes for a little everyday treat.",
            ],
            [
                "Choco Chip Banana Cupcakes",
                "choco-chip-banana-cupcakes",
                25,
                "piece",
                "banana-tray-1.webp",
                "banana-cupcakes",
                "Homemade banana cupcakes topped with chocolate chips for an extra sweet bite.",
            ],
        ];
        foreach (
            $products
            as [$name, $slug, $price, $unit, $image, $category, $description]
        ) {
            Product::updateOrCreate(
                ["slug" => $slug],
                compact(
                    "name",
                    "price",
                    "unit",
                    "image",
                    "category",
                    "description",
                ),
            );
        }
    }
}
