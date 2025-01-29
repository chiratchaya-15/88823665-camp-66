<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/mycontroller/{id?}', [MyController::class, 'myfunction']);

Route::post('/mycontroller/{id?}',
[MyController::class, 'myfunction']);

Route::get('/', function () {
    return view('home');
});

Route::get('hello/{id}?',
function ($val="") {
    return "<h1>Hello Word $val<h1>";
}
);

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::get('/404', function() {
    abort(404);
});

Route::get('/500', function() {
    abort(500);
});
