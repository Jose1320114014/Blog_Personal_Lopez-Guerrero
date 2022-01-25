<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get ('/blog',function (){
    return view('blog');
})->name('blog');

Route::get ('/about',function (){
    return view('about');
})->name('sobre_mi');

Route::get ('/hobbies',function (){
    return view('hobbies');
})->name('Mis_Hobbies');

Route::get ('/Redes_Sociales',function (){
    return view('social');
})->name('Redes_Sociales');
