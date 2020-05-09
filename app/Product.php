<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'unit',
        'price',
        'total',

    ];

    public function images()
    {
        return $this->hasMany(image::class,'product_id','id');
    }

    public function review()
    {
     return   $this->hasMany(Review::class);
    }
    public function category(){
      return  $this->belongsTo(categories::class);
    }
    public function hasUnit(){
        return $this->belongsTo(unites::class);
    }
    public function  tag(){
   return $this->belongsToMany(Tag::class);
    }
}
