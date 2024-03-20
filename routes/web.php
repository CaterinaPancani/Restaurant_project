<?php

use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;

Route::get('/',[main::class,'home'])->name('home');
