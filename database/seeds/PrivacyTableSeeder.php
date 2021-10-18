<?php

use Illuminate\Database\Seeder;
use App\Models\PrivacyPolicy;

class PrivacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrivacyPolicy::create([

            'main_text'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_one'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_two'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_three'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_four'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_five'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_six'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_seven'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
            'text_eight'=>[
                'ar'=>'نص رئيسي',
                'en'=>'main',
            ],
        ]);
    }
}
