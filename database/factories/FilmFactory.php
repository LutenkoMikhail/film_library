<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(5, true),
            'published' => $this->faker->randomElement([false, true]),
            'poster' => $this->faker->image('public/storage/images/posters', 200, 200, null, true)
        ];
    }
}
