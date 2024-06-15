<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Image\ImageResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'description' => $this->description,
           // 'image' => ImageResource::collection($this->images)->first(),
            'image' => ImageResource::collection($this->images),
            'price' => $this->price,
            'count' => $this->count,
            'is_publish' => $this->is_publish,
            'category' => new CategoryResource($this->category),
        ];
    }
}
