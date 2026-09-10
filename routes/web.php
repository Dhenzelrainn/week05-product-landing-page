<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/features', 'pages.features')->name('features');
Route::view('/products', 'pages.products')->name('products');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/testimonials', 'pages.testimonials')->name('testimonials');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/sign-in', 'pages.sign-in')->name('signin');
