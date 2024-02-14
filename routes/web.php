<?php

use App\Http\Controllers\BreweryController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, "welcome"])->name("welcome");

Route::get("brewery/create", [BreweryController::class, "create"])->name("brewery.create");

Route::post("brewery/store", [BreweryController::class, "store"])->name("brewery.store");

Route::get("brewery/index", [BreweryController::class, "index"])->name("brewery.index");

Route::get("brewery/show/{brewery}", [BreweryController::class, "show"])->name("brewery.show");