<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.welcome');
});
// products and single-products routes
Route::get('/products', function () {
    return view('Pages.Products.products');
});
Route::get('/single-product', function () {
    return view('Pages.Products.single-product');
});