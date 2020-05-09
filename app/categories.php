<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
protected $fillable=['name'];
public function product(){
    return $this->hasMany(Product::class);
}
}
