<?php

use App\Http\Controllers\main;
use App\Http\Controllers\pippo;
use Illuminate\Support\Facades\Route;

Route::get('/',[main::class,'home'])->name('home');
                // {parametro} per rotta parametrica
Route::get('/ordini/{food}',[main::class,'ordini'])->name('ordini');
Route::get('piatti',[main::class,'piatti'])->name('piatti');