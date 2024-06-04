<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Image;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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

        /*IMAGES*/
        if (isset($dataImages))

            foreach ($dataImages as $image) {

                $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
                $pathImage = Storage::disk('public')->putFileAs('/images', new File($image), $name);

                Image::create([

                    'path' => $pathImage,
                    'url' => url('/storage/' . $pathImage),
                    'product_id' => $product->id,
                ]);
            }

        $product->tags()->sync($tags); //ещё есть detach
        $product->colors()->sync($colors);

        return redirect()->route('product.index');

    }
}
