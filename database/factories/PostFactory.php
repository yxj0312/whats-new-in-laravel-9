<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {    
        $title = substr($this->faker->sentence(), 0, -1);

        return [
            // 'user_id' => User::factory(),
            // 'title' => ucfirst($this->faker->words(5, true)),
            // 'body' => $this->faker->sentences(12, true),
            // 'created_at' => $this->faker->dateTimeBetween('-30 days', now()) 
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraphs(500, true),
            'published_at' => $this->faker->dateTimeThisDecade(),
        ];
    }
}
