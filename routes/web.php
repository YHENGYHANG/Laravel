<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/About', function () {
//     return view('About');
// })->name('about');


// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/ImportPage', function () {
    return view('import.ImportPage');
})->name('import');
