<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsteroidController;

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
    return response()->json(["hello" => "MacPaw Internship 2022!"]);
});

Route::get('/neo/hazardous', [AsteroidController::class, 'hazardous']);

Route::get('/neo/fastest', [AsteroidController::class, 'fastest']);