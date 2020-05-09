<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserfullResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'user_id'=>$this->id,
             'first_name'=>$this->first_name,
             'last_name'=>$this->last_name, 
             'email'=>$this->email,
              'password'=>$this->password,
               'phone'=>$this->phone, 
               'phone_verified'=>$this->phone_verified, 
               'shipping_address'=>new AddresResource($this->shipping_address), 
               'billing_address'=>new AddresResource($this->billing_address),
               'member_science'=>$this->create_at->format('l d f y'),
        ];
    }
}
