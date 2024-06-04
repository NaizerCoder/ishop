<?php

namespace App\Http\Controllers\Product\Image;

use App\Http\Controllers\Controller;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{

    public function __invoke(Image $image)
    {
        Storage::disk('public')->delete($image->path);
        $image->delete();

        return redirect()->route('product.edit',$image->product_id);

    }
}

