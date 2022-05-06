<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_place'=>$this->faker->numberBetween(1,20),
            'name'=>$this->faker->word,
            'description'=>$this->faker->sentence(),
            'history'=>$this->faker->sentence(),
        ];
    }
}
