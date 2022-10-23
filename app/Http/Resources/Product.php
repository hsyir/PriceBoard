<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            "price"=>$this->price,
            "no_discount_price"=>$this->no_discount_price,
            "discount_percent"=>$this->discount_percent,
        ];
    }
}
