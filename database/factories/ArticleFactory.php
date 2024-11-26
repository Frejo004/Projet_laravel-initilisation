<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(15), //on veut 15 mots
            'body' => $this->faker->paragraph(50), // on veut 50 mots
            'user_id' => 1,
            'image' => $this->faker->image('public/image'),
        ];
    }
}
