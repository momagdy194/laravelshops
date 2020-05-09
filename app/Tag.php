<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class Tag extends Model
{
    protected $fillable=[
        'tag'
    ];
   public function product(){
       return $this->hasMany(Product::class);
   }

}
