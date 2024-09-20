<?php

use App\Http\Controllers\cartController;
use Illuminate\Support\Facades\Route;

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});


