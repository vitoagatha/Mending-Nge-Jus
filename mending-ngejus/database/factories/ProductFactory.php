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
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'price' => (string) $this->faker->randomFloat(2, 1, 100),
            'category' => $this->faker->word(),
            'quantity' => (string) $this->faker->numberBetween(1, 50),
        ];
    }
}
