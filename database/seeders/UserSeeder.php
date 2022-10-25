<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {

        User::create([
            'name' => 'Muhammadislom',
            'last_name' => 'Eshonqulov',
            'phone' => '+998946738636',
            'email' => 'islom.pr@gmail.com',
            'role' => 0,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
//            'name' => env('DEV_NAME'),
//            'last_name' => env('DEV_LAST_NAME'),
//            'phone' => env('DEV_PHONE'),
//            'email' => env('DEV_EMAIL'),
//            'password' => env('DEV_PASSWORD'),
//            'role' => env('DEV_ROLE'),
        ]);

        User::factory(10)->create();
    }
}
