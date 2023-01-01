<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-10 years', 'now');

        return [
            'comment' => $this->faker->sentences(random_int(1, 6), true),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
