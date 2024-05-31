<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['tags'])) {

            $tags = $data['tags'];
            unset($data['tags']);
        }

        if (isset($data['colors'])) {

            $colors = $data['colors'];
            unset($data['colors']);
        }

        $product = Product::firstOrCreate($data);

        if (isset($tags)) {
            $product->tags()->attach($tags);
        }

        if (isset($colors)) {
            $product->colors()->attach($colors);
        }

        return redirect()->route('product.index');

    }
}
