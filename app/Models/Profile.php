<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $guarded = [];
    public $timestamps = true;

    public function user()
    {
        
           return $this->belongsTo(User::class);
           
    }


}
