<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Cold Appetizers',
            'Hot Appetizers',
            'Salads',
            'Soups',
            'Pasta',
            'Pizza (30 см)',
            'Main Meat Dishes',
            'Fish & Seafood',
            'Sides',
            'Vegetarian Dishes',
            'Desserts',
            'Drinks',
            'Kids Menu',
            'Seasonal Specials',
            'Breakfasts',
        ];
        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name'=> $category,
            ]);
            
        }
    }
}
