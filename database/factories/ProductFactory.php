<?php

namespace Database\Factories;

use App\Models\Delivery;
use App\Models\ProductCategory;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Symfony\Component\Mime\Header\IdentificationHeader;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title'                 => $this->faker->unique(true)->word(),
            'description'           => $this->faker->text(),
            'short_description'     => $this->faker->text(),
            'price'                 => (float)(rand(0, 999999) / 100),
            'discount'              => (float)(rand(0, 999999) / 100),
            'stock'                 => (boolean)(rand(0, 1)),
            'image'                 => '/product/img/default.jpg',
            'status'                => (boolean)(rand(0, 1)),
            'parameters'            => json_encode(['params_1' => 'test1', 'params_2' => 'test2']),
            'room_id'               => Room::count() ? Room::inRandomOrder()->first()->id : Room::factory()->create()->id,
            'product_category_id'   => ProductCategory::count() ? ProductCategory::inRandomOrder()->first()->id : ProductCategory::factory()->create()->id,
            'delivery_id'           => Delivery::count() ? Delivery::inRandomOrder()->first()->id : Delivery::factory()->create()->id,
            'identifier'            => rand(99999999, 999999999),
        ];
    }
}
