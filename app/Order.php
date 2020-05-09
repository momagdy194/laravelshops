<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id',
        'payment_id',
        'cart_id',
        'order_data'
    ];
    public function customer(){
        return    $this->belongsTo(User::Class);
    }
    public function payment(){
        return $this->hasOne(Payment::class);
    }

}
