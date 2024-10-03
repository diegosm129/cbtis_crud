<?php

use App\Http\Controllers\boxcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/box',[boxcontroller::class,'index'])->name('box.index');

Route::get('/box/create',[boxcontroller::class,'create'])->name('box.create');

route::post('/box/store',[boxcontroller::class, 'store'])->name('box.store');