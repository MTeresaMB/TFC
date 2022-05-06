<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_chapter'=>$this->faker->numberBetween(1,50),
            'title'=>$this->faker->sentence(),
            'summary'=>$this->faker->sentence(),
            'id_manuscript'=>$this->faker->numberBetween(1,20),
        ];
    }
}
