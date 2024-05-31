<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::orderBy('title','ASC')->get();
        return view('product.index',compact('products'));
    }
}
