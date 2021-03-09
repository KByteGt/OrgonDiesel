<?php

namespace Database\Factories;

use App\Models\Lubricant;
use Illuminate\Database\Eloquent\Factories\Factory;

class LubricantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lubricant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->uuid,
            'description' => $this->faker->name,
            'presentation' => $this->faker->name,
            'detail' => $this->faker->text
            //'category' => Str::random(4)
        ];
    }
}
