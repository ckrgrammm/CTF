<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorylineGameController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/play', [StorylineGameController::class, 'play'])->name('play');


// Route for the main page of the storyline game using a controller
Route::get('/storyline-game', [StorylineGameController::class, 'index']);