<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    /**
     * Get the reviews for the recipe.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
