<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Blog extends Model
{
    use HasTranslations;
    public $table = 'blogs';
    public $guarded = [];
    public $translatable = [
        'blog_title',
        'short_description',
        'long_description',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
