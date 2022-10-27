<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title'         => $this->faker->unique(true)->word(),
            'description'   => $this->faker->text(),
        ];
    }
}
