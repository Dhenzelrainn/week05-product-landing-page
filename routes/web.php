<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get("/", [ProductController::class, "home"])->name("home");
Route::get("/products", [ProductController::class, "index"])->name("products");
Route::get("/products/{product:slug}", [
    ProductController::class,
    "show",
])->name("products.show");
Route::view("/features", "pages.features")->name("features");
Route::view("/pricing", "pages.pricing")->name("pricing");
Route::view("/testimonials", "pages.testimonials")->name("testimonials");
Route::view("/contact", "pages.contact")->name("contact");
Route::view("/sign-in", "pages.sign-in")->name("signin");
