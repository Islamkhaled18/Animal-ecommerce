<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = "admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('0123456789');
        $admin->save();


        // $this->call(UsersTableSeeder::class);
        $this->call(About_usTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PrivacyTableSeeder::class);
        $this->call(OpinionTableSeeder::class);
        $this->call(AdvertiseTableSeeder::class);
        $this->call(ServiceTableSeeder::class);

        

    }
}
