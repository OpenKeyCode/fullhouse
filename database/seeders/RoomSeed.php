<?php

namespace Database\Seeders;

use App\Models\Room\Room;
use Illuminate\Database\Seeder;

class RoomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::factory(10)->create();
    }
}
