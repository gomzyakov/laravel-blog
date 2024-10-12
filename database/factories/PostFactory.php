<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function mt_rand;

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
            'title'         => $title = fake()->title,
            'slug'          => Str::slug($title),
            'preview_image' => 'https://loremflickr.com/640/480?random=' . mt_rand(1, 9999),
            'main_image'    => 'https://loremflickr.com/640/480?random=' . mt_rand(1, 9999),
            'content'       => fake()->realText(5000),
        ];
    }
}
