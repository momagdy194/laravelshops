<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'id';

    public function cities()
    {
        return     $this->hasMany(cities::class,'country_id','id');
    }

    public function states()
    {
        return    $this->hasMany(states::class,'country_id','id');
    }
}
