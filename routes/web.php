<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;


Route::get('/', function () {
    return view('index');
});
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/apropos', [PagesController::class, 'apropos'])->name('apropos');

Route::get('/service', [PagesController::class, 'service'])->name('service');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::post('/contact-public', [PagesController::class, 'postContactPublic'])->name('postContactPublic');



