<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * Get the recipe that the review belongs to.
     */
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
