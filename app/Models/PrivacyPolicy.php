<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class PrivacyPolicy extends Model
{
    use HasTranslations;
    public $table = 'privacy_policies';
    public $guarded = [];
    public $translatable = [
        'main_text',
        'text_one',
        'text_two',
        'text_three',
        'text_four',
        'text_five',
        'text_six',
        'text_seven',
        'text_eight',
    ];
}
