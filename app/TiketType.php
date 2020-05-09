<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiketType extends Model
{
    protected  $fillable=['name'];
    public function ticket(){
        return $this->hasMany(Tiket::class);
    }
}
