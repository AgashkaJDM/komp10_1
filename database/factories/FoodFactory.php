<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = \App\Models\Category::inRandomOrder()->first();
        $restaurant = \App\Models\Restaurant::inRandomOrder()->first();
        return [
            'category_id' => $category->id,
            'restaurant_id' => $restaurant->id,
            'name'=> fake()->word(),
            'price'=> fake()->numberBetween(10, 100),
            'code'=> fake()->numberBetween(10000, 99999),
            // 'like_count'=> fake()->numberBetween(0,10000),
            
            
        ];
    }
}
