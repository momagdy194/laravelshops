<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected  $fillable =[
        'card_item',
        'total',
    ];
    public function customer(){
        return $this->belongsTo(User::class);
    }


}
