<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Seeder;

class DeliverySeed extends Seeder
{

    public function run()
    {
        Delivery::factory(10)->create();

    }
}
