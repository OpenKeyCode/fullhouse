<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    protected $model = ProductCategory::class;


    public function definition(): array
    {
        return [
            'title'                 => $this->faker->unique(true)->word(),
            'image'                 => '/product_category/img/default.jpg',
            'icon'                  => '/product_category/img/default.jpg',
            'color'                 => $this->faker->name(),
            'description'           => $this->faker->text(),
            'parent_category_id'    =>$this->faker->boolean ? (ProductCategory::count() ? ProductCategory::inRandomOrder()->first()->id : ProductCategory::factory()->create()->id) : null
        ];
    }
}
