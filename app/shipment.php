<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'payment_id',
        'statue',
        'shipment_date',
    ];
    public function customer(){
        return $this->belongsTo(User::class);
    }
    public function  order(){
        return    $this->belongsTo(Order::class);}
    public function payment(){
        return $this->hasOne(Payment::class);
    }
}
