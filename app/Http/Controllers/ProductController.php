<?php
namespace App\Http\Controllers;
use App\Models\Product;
class ProductController extends Controller
{
    public function home()
    {
        return view("pages.home", [
            "products" => Product::orderBy("id")->get(),
        ]);
    }
    public function index()
    {
        return view("pages.products", [
            "products" => Product::orderBy("id")->get(),
        ]);
    }
    public function show(Product $product)
    {
        return view("pages.product", compact("product"));
    }
}
