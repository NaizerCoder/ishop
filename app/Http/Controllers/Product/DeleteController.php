<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $images = $product->images;

        foreach ($images as $image){
            Storage::disk('public')->delete($image->path);
        }

        $product->delete();
        return redirect()->route('product.index');
    }
}

