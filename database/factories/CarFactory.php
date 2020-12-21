<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'model' => $this->faker->text,
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
            'year' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'plate' => $this->faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt')
        ];
    }
}
