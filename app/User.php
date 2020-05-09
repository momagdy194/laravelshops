<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone', 'phone_verified', 'shipping_address', 'billing_address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function order()
    {
        return $this->hasMany(order::class);
    }

    public function payment()
    {
        return $this->hasMany(payment::class);
    }

    public function shipment()
    {
        return $this->hasMany(shipment::class);
    }

    public function shippingaddress()
    {
        return $this->hasOne(addrees::class, 'id', 'shipping_address');
    }

    public function pilingaddress()
    {
        return $this->hasOne(addrees::class, 'id', 'billing_address');
    }

    public function wishList()
    {
        return $this->hasMany(WishList::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::Class);
    }
    public function roles(){
      return   $this->belongsToMany(Role::class);
    }
    public function  format_name(){
        return $this->first_name .' '.$this->last_name;
    }
}
