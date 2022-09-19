<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeed extends Seeder
{

    public function run()
    {
        Room::factory(10)->create();
    }
}
