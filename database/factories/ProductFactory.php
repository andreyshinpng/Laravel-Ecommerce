<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(20),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis posuere.',
            'price' => fake()->randomFloat(2, 2, 5),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
