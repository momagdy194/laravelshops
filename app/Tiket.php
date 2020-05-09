<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'user_id',
        'order_id',
        'title',
        'message',
        'statues',
        'ticket_type_id'
    ];

    public function tikettType()
    {
        return $this->belongsTo(TiketType::class);
    }
    public function customer(){
    return    $this->belongsTo(User::class,'user_id','id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'user_id','id');
    }

}
