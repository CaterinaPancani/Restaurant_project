<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class main extends Controller
{
    public $food;
    public function home(){
        return view('home');
    }
    public function orders(Food $food){
        $orders=$food->orders()->get();
        return view('orders',compact('orders'));
    }
    public function foods(){
        $foods=Food::all();
        return view('foods.dashboard',compact('foods'));
    }
}
