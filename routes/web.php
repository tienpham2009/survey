<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , [ResultController::class , 'showForm'])->name('showForm');
Route::post('/' , [ResultController::class , 'setUser'])->name('setUser');
Route::get('{food_id}/food' , [FoodController::class , 'selectFood'])->name('selectFood');
Route::get('food' , [FoodController::class , 'showFood'])->name('showFood');
Route::get('{pet_id}/pet' , [PetController::class , 'selectPet'])->name('selectPet');
Route::get('/pet' , [PetController::class , 'showPet'])->name('showPet');
Route::get('/result' , [ResultController::class , 'showResult'])->name('showResult');

