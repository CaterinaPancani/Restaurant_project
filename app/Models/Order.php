<?php

namespace App\Models;

use App\Models\Food;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    public function foods(){
        return $this->belongsToMany(Food::class,'food_order','odid','fdid');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
