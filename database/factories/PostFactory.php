<?php

// database/factories/PostFactory.php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition(): array {
        return [
            'title' => fake()->sentence(6),
            'body'  => fake()->paragraphs(4, true),
            'created_at' => now()->subDays(rand(0, 30)),
        ];
    }
}
