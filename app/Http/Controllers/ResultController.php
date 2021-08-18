<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Models\Food;
use App\Models\Pet;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ResultController extends Controller
{

    public function showForm()
    {
        session()->forget('user');
        return view('email');
    }

    public function setUser(EmailRequest $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();

        if (empty($user->email)) {
            $user = new User();
            $user->email = $email;
            $user->save();
        }
        Session::put('user_id', $user->id);
        return redirect()->route('showFood');
    }




    public function showResult()
    {
        $table = [];
        $pet = Pet::all('name');
        $food = Food::all('name');
        for ($i = 0; $i <= count($pet); $i++) {
            for ($j = 0; $j <= count($food); $j++) {
                if ($i == 0 && $j == 0) {
                    $table[$i][$j] = '';
                }
                if ($i == 0 && $j != 0) {
                    $table[$i][$j] = $pet[$j - 1]->name;
                }
                if ($i != 0 && $j == 0) {
                    $table[$i][$j] = $food[$i - 1]->name;
                }
                if ($i != 0 && $j != 0) {
                    $survey = Result::where('pet_id', $j)
                        ->where('food_id', $i)
                        ->count();
                    $table[$i][$j] = $survey;
                }
            }
        }
        $food_id = \session()->get('food_id');
        $pet_id = \session()->get('pet_id');
        return view('result', compact('table' , 'food_id' , 'pet_id'));
    }
}
