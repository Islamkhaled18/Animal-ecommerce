<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Reservation extends Model
{
    
    public $table = 'reservations';
    public $guarded = [];

    protected $dates = [
        'reservation_date',
        ];
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
