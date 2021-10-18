<?php

use Illuminate\Database\Seeder;
use App\Models\About_us;

class About_usTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About_us::create([
            'main_title'=>[
                'ar'=>'نستطيع ان نجعلهم ',
                'en'=>'make them happy',
            ],
            'main_text'=>[
                'ar'=>'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.',
                'en'=>'Good news',
            ],
            'sub_title'=>[
                'ar'=>'نستطيع ان نجعلهم  ',
                'en'=>'make them happy',
            ],
            'sub_text'=>[
                'ar'=>'هناك حقيقة مثبتة .',
                'en'=>'Good news',
            ],
            'main_photo' => asset('images/blog.png'),

            'sub_photo' => asset('images/hero.png'),

            'youtube' => 'https://www.youtube.com/embed/q5chhdaNQ88',

        ]);
    }
}
