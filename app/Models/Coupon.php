<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Coupon extends Model
{
    protected $table ='coupons';
    
    protected $guarded =[];


    public function carts(){

        return $this->hasMany(Cart::class);
    }

    

    

}
