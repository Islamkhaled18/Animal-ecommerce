<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Attribute;


class Opinion extends Model
{
    public $table = 'opinions';
    public $fillable = [
        'customer_one_name',
        'customer_one_job',
        'customer_one_opinion',
        'customer_two_name',
        'customer_two_job',
        'customer_two_opinion',
    ];


    


}
