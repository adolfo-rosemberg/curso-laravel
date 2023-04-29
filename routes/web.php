<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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
    //return view('welcome');
    return "Ruta principal!";
});

Route::controller(GameController::class)->group(function () {
    Route::get('/games', 'index');
    Route::get('/games/{id}', 'show');
    Route::post('/games', 'store');
    Route::get('/games/categoria/{game}/{tag?}', 'help');
});
