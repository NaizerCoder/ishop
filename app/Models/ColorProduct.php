<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorProduct extends Model
{
    use HasFactory;
    protected $table = 'color_products';
    protected $guarded = [];


    public function products(){
        return $this->belongsToMany( Product::class, 'color_products','color_id', 'product_id');
    }


}
