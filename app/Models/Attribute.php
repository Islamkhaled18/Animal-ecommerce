<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;




class Attribute extends Model
{
    use HasTranslations;
    public $table = 'attributes';
    public $guarded = [];
    public $translatable = [
        'attributes_name',
    ];

    public  function options(){
        return $this->hasMany(Option::class,'attribute_id');
    }
}
