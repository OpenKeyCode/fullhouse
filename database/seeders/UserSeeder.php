<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {

        User::factory()->create([
            'name' => env('DEV_NAME'),
            'last_name' => env('DEV_LAST_NAME'),
            'email' => env('DEV_EMAIL'),
            'password' => env('DEV_PASSWORD'),
            'phone' => env('DEV_PHONE'),
            'role' => env('DEV_ROLE'),
        ]);

        User::factory(10)->create();
    }
}
