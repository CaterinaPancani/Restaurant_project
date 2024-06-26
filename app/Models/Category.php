<?php

namespace App\Models;

use App\Models\Subcat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function subcats(){
        return $this->hasMany(Subcat::class);
    }
}
