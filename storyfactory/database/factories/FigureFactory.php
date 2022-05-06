<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FigureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_figure'=>$this->faker->numberBetween(1,50),
            'nameFigure'=>$this->faker->name,
            'biography'=>$this->faker->sentence(),
            'role'=>$this->faker->word,
            'flaw'=>$this->faker->sentence(),
            'external_motivation'=>$this->faker->sentence(),
            'internal_motivation'=>$this->faker->sentence(),
            'positive_traits'=>$this->faker->sentence(),
            'negative_traits'=>$this->faker->sentence(),
            'quirks_mannerisms'=>$this->faker->sentence(),
            'motto'=>$this->faker->sentence(),
            'build'=>$this->faker->sentence(),
            'hair_color'=>$this->faker->sentence(),
            'hair_style'=>$this->faker->sentence(),
            'eye_color'=>$this->faker->word,
            'scars'=>$this->faker->sentence(),
        ];
    }
}
