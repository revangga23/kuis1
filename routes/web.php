<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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


Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "nama" => "revan",
        "alamat" => "suhat",
        "notelp" => "0877569018401"
    ]);
});

Route::get('admin', function () {
    return view('admin', [
        "title" => "admin",
        "nama" => "rita",
        "alamat" => "dinoyo",
        "notelp" => "085801840410"
    ]);

});

Route::get('about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "ridho",
        "alamat" => "batu",
        "notelp" => "0858018410101"
    ]);

});


Route::get('/posts', [PostController::class, 'index']);



Route::get('/posts/{slug}', [PostController::class, 'show']);
    
    