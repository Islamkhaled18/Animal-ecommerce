<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $guarded = [];
    public $timestamps = true;

    public function comment()
    {
        return $this->belongsTo(Comment::class ,'comment_id');
    }
}
