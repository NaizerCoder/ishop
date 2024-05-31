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

        $product->update($data);
        $product->tags()->sync($tags); //ещё есть detach

        return redirect()->route('product.index');
    }
}
