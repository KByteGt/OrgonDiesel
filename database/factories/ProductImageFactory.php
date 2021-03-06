<?php

namespace Database\Factories;

use App\Models\Product_category;
use App\Models\Product_image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product_category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name
        ];
    }
}
