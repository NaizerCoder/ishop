<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Filterable;

    protected $table = 'products';
    protected $guarded = [];

    public function tags(){
        return $this->belongsToMany( Tag::class, 'product_tags', 'product_id', 'tag_id')->withPivot('pos');;
    }

    public function colors()
    {
        return $this->belongsToMany( Color::class, 'color_products', 'product_id', 'color_id');
    }

    public function category(){

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function group(){

        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function images(){
        return $this->hasMany(Image::class, 'product_id','id');
    }

    public function posTag(){
        return $this->belongsToMany( Tag::class, 'product_tags')->withPivot('pos');
    }
}
