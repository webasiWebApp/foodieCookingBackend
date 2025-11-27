<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Review;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', ['recipes' => Recipe::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recipe = Recipe::with('reviews')->findOrFail($id);
        return view('recipes.show', ['recipe' => $recipe]);
    }

    /**
     * Add a review to a recipe.
     */
    public function addReview(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $review = new Review;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->review = $request->review;

        $recipe->reviews()->save($review);

        return back();
    }
}
