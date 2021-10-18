<?php

use Illuminate\Database\Seeder;
use App\Models\Advertise;

class AdvertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advertise::create([

            'adv_one' =>asset('uploads/advertise/1.jng'),
            'adv_two' =>asset('uploads/advertise/2.jng'),

        ]);
    }
}
