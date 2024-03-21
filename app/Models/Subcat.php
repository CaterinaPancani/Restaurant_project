<?php

namespace App\Models;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcat extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function foods(){
        return $this->hasMany(Food::class);
    }
}
