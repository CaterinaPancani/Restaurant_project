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
// param. di belongsToMany ([classe], [nome tabella pivot], [colonna riferita a this oggetto], [colonna dell'oggetto di cui si vuole referenza])
        return $this->belongsToMany(Order::class,'food_order','fdid','odid');
    }
    public function subcat(){
        return $this->belongsTo(Subcat::class);
    }
}
