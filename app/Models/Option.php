<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Option extends Model
{
    use HasTranslations;
    public $table = 'options';
    public $guarded = [];
    public $translatable = [
        'option_name',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function attribute(){
        return $this -> belongsTo(Attribute::class,'attribute_id');
    }

}
