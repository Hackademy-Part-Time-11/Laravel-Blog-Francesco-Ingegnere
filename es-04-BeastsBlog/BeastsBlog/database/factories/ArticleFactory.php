<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
        $indirizzo = 'C:\Users\Francesco\Dropbox\02_FRANCESCO\01_PROGRAMMAZIONE\02_AULAB\07_Laravel\04_esercizi_LARAVEL\es-04-BeastsBlog\BeastsBlog\storage\app/';

        return [
            'user_id' => rand(1, 20),
            'title' => fake()->words(rand(3, 6), true),
            'description' => fake()->words(rand(6, 15), true),
            'visible' => 1,
            'body' => fake()->text(rand(150, 300)),
            'image' => str_replace($indirizzo, '', fake()->image(storage_path('app/public/articles') ,640, 480, 'animals', true)),
        ];
    }
}
