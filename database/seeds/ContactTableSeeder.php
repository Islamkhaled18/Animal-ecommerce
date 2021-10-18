<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([

            'address'=>[
                'ar'=>'المملكة العربية السعودية مدينة الرياض - شارع 15',
                'en'=>'Saudi arabia'
            ],
            'phone_one'=>'+2000000',
            'phone_two'=>'+233333',
            'email_one'=>'i@g.com',
            'email_two'=>'s@g.com',
            'photo'=>asset('images/blog.png'),
        ]);
    }
}
