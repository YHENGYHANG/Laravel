<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/About', function () {
//     return view('About');
// })->name('about');


// Route::get('/contact', function () {
//     return view('pages.contact');
// })->name('contact');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/student', function () {
    return view('student');
})->name('product');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/ImportPage', function () {
    return view('import.ImportPage');
})->name('import');

// Auth::routes();

Route::get('/student', [studentController::class, 'index'])->name('student');

