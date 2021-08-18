<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = new Food();
        $food->name = 'Chocolate';
        $food->description = 'Description of Chocolate';
        $food->image = 'chocolate.png';
        $food->save();

        $food = new Food();
        $food->name = 'Banana';
        $food->description = 'Description of Banana';
        $food->image = 'banana.png';
        $food->save();

        $food = new Food();
        $food->name = 'Fried chicken';
        $food->description = 'Description of Chocolate';
        $food->image = 'fried_chicken.png';
        $food->save();
    }
}
