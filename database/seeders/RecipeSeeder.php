<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert([
            [
                'name' => 'Classic Tomato Spaghetti',
                'description' => 'A simple yet delicious pasta dish with a rich tomato sauce.',
                'image_url' => '/images/pasta.jpg',
                'restaurant_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Spicy Chicken Curry',
                'description' => 'A fragrant and spicy chicken curry that will warm your soul.',
                'image_url' => '/images/curry.jpg',
                'restaurant_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
