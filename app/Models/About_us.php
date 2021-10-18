<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class About_us extends Model
{
    use HasTranslations;

    public $table = 'about_us';
    public $guarded = [];
    public $translatable = [
        'main_title',
        'main_text',
        'sub_title',
        'sub_text',
    ];
}
