<?php

namespace Database\Seeders;

use App\Models\Delivery\Delivery;
use Illuminate\Database\Seeder;

class DeliverySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delivery::factory(10)->create();

    }
}
