<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myfirstcontroller;

Route::get('/hello', function () {
    echo 'Hello, World!';
});

Route::get('/hellodaricontroller', [Myfirstcontroller::class, 'helloworld']);
Route::get('/dengan/parameter/{id}', [Myfirstcontroller::class, 'withparam']);
Route::get('/myview', [Myfirstcontroller::class, 'showmyview']);
Route::get('/viewwithdata', [Myfirstcontroller::class, 'viewwithdata']);
Route::get('/admin/home', [Myfirstcontroller::class, 'index']);
