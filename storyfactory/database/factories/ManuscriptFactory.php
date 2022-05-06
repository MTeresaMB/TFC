<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManuscriptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_manuscript'=>$this->faker->numberBetween(1,20),
            'title'=>$this->faker->sentence(),
            'summary'=>$this->faker->sentence(),
            'id_user'=>$this->faker->numberBetween(1,20),
        ];
    }
}
