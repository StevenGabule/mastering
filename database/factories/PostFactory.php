<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
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
        $title = fake()->sentence;
        $slug = Str::slug($title, '-');

        return [
            'user_id' => DB::table('users')->inRandomOrder()->value('id'),
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->sentence,
            'content' => fake()->sentence,
            'is_published' => fake()->boolean,
            'min_to_read' => fake()->randomDigit(),
        ];
    }
}
