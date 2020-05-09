<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    protected $table ='states';
    protected  $primaryKey = 'id';

    public function cities(){

        return     $this->hasMany(cities::class,'state_id','id');
    }

    public function countries(){

        return   $this->belongsTo(countries::class,'country_id','id');
    }


}
