<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

//Route::get('/contact', function () {
//    return view('contact');
//});
Route::get('/perfil', function (){
    return view('perfil');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/event', function () {
    return view('events');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('index');
});

Route::get('/select', function () {
    return view('select');
});

Route::get('/product/{id}', function ($id) {
    return view('product', ['id' => $id]);
});


Route::get('/welcome', [WelcomeController::class, 'welcome']);

Route::get('/contact', [TestController::class, 'contact'])->name('contact');

