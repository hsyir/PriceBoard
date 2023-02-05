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
        return [
            "name"=>$this->name,
            "color"=>$this->color,
            "color2"=>$this->color2,
            "products"=>new ProductCollection($this->publishedProducts)
        ];
    }
}
