<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Image;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        try {

            DB::beginTransaction();

            if (isset($data['tags'])) {

                $tags = $data['tags'];
                unset($data['tags']);
            }

            if (isset($data['colors'])) {

                $colors = $data['colors'];
                unset($data['colors']);
            }

            if (isset($data['images'])) {

                $dataImages = $data['images'];
                unset($data['images']);
            }

            $product = Product::firstOrCreate($data);

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

            if (isset($tags)) {
                $product->tags()->attach($tags);
            }

            if (isset($colors)) {
                $product->colors()->attach($colors);
            }

            DB::commit();

        } catch (\Exception $exception) {

            DB::rollBack();
            //dd($exception->getMessage());
            abort('404');
        }

        return redirect()->route('product.index');
    }
}
