<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_article'=>$this->faker->numberBetween(1,50),
            'id_user'=>$this->faker->numberBetween(1,20),
            'name'=>$this->faker->word,
            'description'=>$this->faker->sentence(),
        ];
    }
}
