<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            [
                'name' => 'The Pasta Place',
                'location' => '123 Main Street, Anytown USA',
                'cuisine' => 'Italian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Curry in a Hurry',
                'location' => '456 Oak Avenue, Anytown USA',
                'cuisine' => 'Indian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
