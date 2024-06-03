<?php

namespace App\Http\Controllers\Product\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(Image $image)
    {
        dd($image);
        Storage::disk('public')->delete($image->path);
        $image->delete();

        return redirect()->route('product.index');

    }
}

