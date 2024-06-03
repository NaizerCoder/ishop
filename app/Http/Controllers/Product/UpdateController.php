<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        if (isset($data['tags'])) {

            $tags = $data['tags'];
            unset($data['tags']);
        } else $tags = [];

        if (isset($data['colors'])) {

            $colors = $data['colors'];
            unset($data['colors']);
        } else $colors = [];

        if (isset($data['images'])) {

            $dataImages = $data['images'];
            unset($data['images']);
        }

        $product->update($data);
        $product->tags()->sync($tags); //ещё есть detach
        $product->colors()->sync($colors);

        /*IMAGES*/

        return redirect()->route('product.index');

    }
}
