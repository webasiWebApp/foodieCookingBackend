<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'recipe_id' => 1,
                'name' => 'Jane Doe',
                'email' => 'jane.doe@example.com',
                'rating' => 5,
                'review' => 'Absolutely loved this recipe! So easy to make and tasted amazing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recipe_id' => 1,
                'name' => 'John Smith',
                'email' => 'john.smith@example.com',
                'rating' => 4,
                'review' => 'Great recipe, but I added a little extra chili for a kick.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recipe_id' => 2,
                'name' => 'Peter Jones',
                'email' => 'peter.jones@example.com',
                'rating' => 5,
                'review' => 'This curry is the real deal! Tasted just like my favorite restaurant.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
