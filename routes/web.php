<?php

use App\Http\Controllers\main;
use App\Http\Controllers\pippo;
use Illuminate\Support\Facades\Route;

Route::get('/',[main::class,'home'])->name('home');
                // {parametro} per rotta parametrica
Route::get('/orders/{food}',[main::class,'orders'])->name('orders');
Route::get('foods',[main::class,'foods'])->name('foods');