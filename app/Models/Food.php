<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Subcat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;
    protected $table='foods';
    public function orders(){
        return $this->belongsToMany(Order::class,'food_order','fdid','odid');
    }
    public function subcat(){
        return $this->belongsTo(Subcat::class);
    }
}
