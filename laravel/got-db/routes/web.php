<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\NotableEventController;
use App\Models\Character;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/characters', [CharacterController::class, 'index'])->name('characters');
Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('character');

Route::get('/houses', [HouseController::class, 'index'])->name('houses');
Route::get('/houses/{house}', [HouseController::class, 'show'])->name('house');

Route::get('/events', [NotableEventController::class, 'index'])->name('events');
Route::get('/events/{event}', [NotableEventController::class, 'show'])->name('event');
