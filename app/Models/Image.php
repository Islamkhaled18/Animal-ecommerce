<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = 'images';
    public $guarded = [];
    public function getPhotoAttribute($val)
    {

        return $val ? asset('assets/images/products/'.$val) : '';
    }


}
