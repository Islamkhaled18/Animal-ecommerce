<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'description'=>[
                'ar'=>'نستطيع ان نجعلهم ',
                'en'=>'make them happy',
            ],
            'service_one'=>[
                'ar'=>'هناك حقيقة مثبتة منذ زمن طويل ص.',
                'en'=>'Good news',
            ],
            'service_two'=>[
                'ar'=>'نستطيع ان نجعلهم  ',
                'en'=>'make them happy',
            ],
            'phone'=>'0101222',
            'email' => 's@s.v',

        ]);
    }
}
