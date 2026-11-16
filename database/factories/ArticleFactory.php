<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'summary' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'permalink' => fake()->slug(),
            'published_at' => fake()->dateTimeBetween('-1 year'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
            'thumbnail_url' => fake()->imageUrl(),
            'author_name' => fake()->name(),
        ];
    }
}
