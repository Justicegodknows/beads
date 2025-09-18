<?php

namespace Database\Factories;
use App\Models\Productcategogry;
use App\Models\Author;
use App\Models\Article;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productcategogry>
 */
class ProductcategogryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'author_id' => Author::factory(),
            'article_id' => Article::factory(),
        
            //
        ];
    }
}
