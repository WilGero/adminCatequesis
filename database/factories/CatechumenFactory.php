<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CatechumenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
               'name' => $this->faker->name(),
               'surname' => $this->faker->name(),
               'ci' => $this->faker->randomNumber($nbDigits = 7, $strict = false),
               'phone' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
               'birth' => $this->faker->date($format = 'Y-m-d',$max = '2008-12-31')// '1979-06-09'
        ];
    }
}
