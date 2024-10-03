<?php

use App\Http\Controllers\boxcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/box',[boxcontroller::class,'index'])->name('box.index');

Route::get('/box/create',[boxcontroller::class,'create'])->name('box.create');

Route::post('/box/store',[boxcontroller::class, 'store'])->name('box.store');

Route::get('/box/{guante}', [boxcontroller::class, 'show'])->name('box.show');

Route::get('box/{guante}/edit',[boxcontroller::class, 'edit'])->name('box.edit');

Route::patch('box/{guante}/update',[boxcontroller::class, 'update'])->name('box.update');

Route::delete('/box/{guante}/destroy', [boxcontroller::class, 'destroy'])->name('box.destroy');