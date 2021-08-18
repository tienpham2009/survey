<?php

namespace App\Http\Controllers;

use App\Models\Food;

class FoodController extends Controller
{
    public function selectFood($food_id)
    {
        session()->put('food_id', $food_id);
        return redirect()->route('showPet');
    }

    public function showFood()
    {
        $foods = Food::all();
        return view('food', compact('foods'));
    }
}
