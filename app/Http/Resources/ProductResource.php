<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_id'=>$this->id,
            'product_title'=>$this->title,
            'product_description'=>$this->description,
            'product_price'=>$this->price,
            'product_total'=>$this->total,
            'product_discount'=>$this->discount,
            'product_catogery'=>new CategoriesResource($this->category),
            'Tag_name'=> TagResource::collection($this->tag),
            'image_url'=> ImageResource::collection($this->images),
            'product_unit'=>new UnitResource($this->hasUnit),
            'product_review'=> ReviewResource::collection($this->review),
        ];
    }
}
