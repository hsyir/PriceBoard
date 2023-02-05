<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        
        $products = request('withoutfilter')=="yes" ? $this->products : $this->publishedProducts;
        return [
            "id"=>$this->id,
            "name"=>$this->name,
            "color"=>$this->color,
            "color2"=>$this->color2,
            "products"=>(new ProductCollection($products))->keyBy("id")
        ];
    }
}
