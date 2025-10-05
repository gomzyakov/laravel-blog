<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => $title = fake()->text(100),
            'slug'          => Str::slug($title),
            'preview_image' => route('placeholder.generate', ['width' => 640, 'height' => 480, 'seed' => Str::slug($title) . '-preview']),
            'main_image'    => route('placeholder.generate', ['width' => 640, 'height' => 480, 'seed' => Str::slug($title) . '-main']),
            'content'       => fake()->realText(5000),
        ];
    }
}
