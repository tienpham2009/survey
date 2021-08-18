<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Result;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function selectPet($pet_id)
    {
        session()->put('pet_id', $pet_id);
        $user_id = session()->get('user_id');
        $food_id = session()->get('food_id');
        $oldResult = Result::where('user_id' , $user_id)->first();

        if (empty($oldResult)) {
            $result = new Result();
            $result->user_id = $user_id;
            $result->food_id = $food_id;
            $result->pet_id = $pet_id;
            $result->save();
        }else{
            $oldResult->food_id = $food_id;
            $oldResult->pet_id = $pet_id;
            $oldResult->save();
        }

        return redirect()->route('showResult');
    }

    public function showPet()
    {
        $pets = Pet::all();
        return view('pet', compact('pets'));
    }
}
