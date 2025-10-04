<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretController;

Route::get('/', function () {
    return view('home'); // pastikan file resources/views/home.blade.php ada
})->name('home');

// Halaman About
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/our-team', function () {
    return view('our-team');
})->name('ourteam');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Halaman Secret (login + check login)
Route::get('/secret', [SecretController::class, 'showForm']);
Route::post('/secret', [SecretController::class, 'checkLogin']);

use App\Http\Controllers\HabitController;

Route::get('/habits', [HabitController::class, 'index'])->name('habits.index');
Route::get('/habits/create', [HabitController::class, 'create'])->name('habits.create');
Route::post('/habits', [HabitController::class, 'store'])->name('habits.store');
Route::post('/habits/{habit}/done', [HabitController::class, 'done'])->name('habits.done');
