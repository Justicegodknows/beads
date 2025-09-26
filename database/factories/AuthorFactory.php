<?php

namespace Database\Factories;
use App\Models\Author;
use App\Models\Article;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(3),
            'email' => $this->faker->unique(4)->safeEmail(),
            //
        ];
    }
}
