<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $products = request('withoutfilter')=="yes" ? $this->products : $this->publishedProducts;
        return [
            "name"=>$this->name,
            "color"=>$this->color,
            "color2"=>$this->color2,
            "products"=>Product::collection($products)
        ];
    }
}
