<?php

namespace App\Models;
use App\Models\Reply;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];
    public $timestamps = true;

    public function blog()
    {
        return $this->belongsTo(Blog::class ,'blog_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }


}
