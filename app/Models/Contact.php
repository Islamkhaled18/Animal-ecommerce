<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Contact extends Model
{
    use HasTranslations;

    public $table = 'contacts';
    public $guarded = [];
    public $translatable = [
        'address',
    ];
}
