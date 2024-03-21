<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class main extends Controller
{
    public function home(){
        return view('home');
    }
    public function ordini(Food $food){
        $orders=$food->orders()->get();
        return view('ordini',compact('orders'));
    }
    public function piatti(){
        $foods=Food::all();
        return view('piatti',compact('foods'));
    }
}
