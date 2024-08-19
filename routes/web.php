<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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



Route::get('/welcome', function () {

    $nome = "Diogo";
    $idade = 24;


    return view('welcome', ['nome' => $nome, 'idade' => $idade]);


});

Route::get('/contact', [TestController::class, 'index'])->name('contact');

