<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    protected $table = 'cities';
    protected $primaryKey='id';

    public function countries(){
        return     $this->belongsTo(countries::class ,'country_id','id');
    }
    public function states(){
        return    $this->belongsTo(states::class ,'state_id','id');
    }
}
