<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Rahmat',
        'courses' => ['Pemrograman Web'],
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
});

use App\Http\Controllers\StudentController;

Route::get('/students', [StudentController::class, 'index']);