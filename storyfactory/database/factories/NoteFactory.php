<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_note'=>$this->faker->numberBetween(1,20),
            'title'=>$this->faker->sentence(),
            'content'=>$this->faker->sentence(),
            'id_manuscript'=>$this->faker->numberBetween(1,20),
        ];
    }
}
