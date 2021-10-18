<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class ShippingAddress extends Model
{
    protected $table = 'shipping_address';
    protected $guarded = [];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
