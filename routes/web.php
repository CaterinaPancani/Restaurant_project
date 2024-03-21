<?php

use App\Http\Controllers\main;
use App\Http\Controllers\pippo;
use Illuminate\Support\Facades\Route;

Route::get('/',[main::class,'home'])->name('home');