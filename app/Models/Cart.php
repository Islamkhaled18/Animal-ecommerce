<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
use App\Models\Coupon;


class Cart extends Model
{
    protected $table = 'carts';
    protected $guarded = [];

    public function products(){
        return $this->belongsTo(Product::class , 'product_id' , 'id');
    }

  

      
}
