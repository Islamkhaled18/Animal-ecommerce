<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Service extends Model
{
    use HasTranslations;

    public $table = 'services';
    public $guarded = [];
    public $translatable = [
        'description',
        'service_one',
        'service_two',
    ];
}
