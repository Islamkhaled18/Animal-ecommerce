<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Profile;
use App\Models\ShippingAddress;
use App\Models\Reservation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile', 'password',
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


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function favouritelist(){
        return $this->belongsToMany(Product::class, 'favourite_lists')->withTimeStamps();
    }   
    
    public function favouritelistHas($productId)
    {
        return Self::favouritelist()->where('product_id',$productId)->exists();
    }


    public function profile()
    {
        return $this->hasOne(Profile::class ,'user_id');
    }

    public function addresses()
    {
        return $this->hasMany(ShippingAddress::class ,'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class ,'user_id');
    }

   

}
