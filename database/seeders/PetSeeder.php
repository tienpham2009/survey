<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pet = new Pet();
        $pet->name = 'Dog';
        $pet->description = 'Description of Dog';
        $pet->image = 'dog.png';
        $pet->save();

        $pet = new Pet();
        $pet->name = 'Cat';
        $pet->description = 'Description of Cat';
        $pet->image = 'cat.png';
        $pet->save();

        $pet = new Pet();
        $pet->name = 'Hamster';
        $pet->description = 'Description of Hamster';
        $pet->image = 'hamster.png';
        $pet->save();
    }
}
