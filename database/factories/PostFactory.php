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
        $title = fake()->realText(50);

        return [
            'title'        => $title,
            'slug'         => Str::slug($title),
            'thumbnail'    => 'https://loremflickr.com/640/480?random=' . mt_rand(1, 9999),
            'body'         => fake()->realText(5000),
            'active'       => fake()->boolean,
            'published_at' => fake()->dateTime,
            'user_id'      => 1,
        ];
    }
}
