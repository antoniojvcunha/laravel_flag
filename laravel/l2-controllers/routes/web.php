<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, "home"]);
Route::get('/about', [AppController::class, "about"]);
Route::get('/users/{username}', [AppController::class, "users"]);
Route::get('/random', [AppController::class, "randomPage"]);
Route::get('/movies', [AppController::class, "movies"]);
Route::get('/games', [AppController::class, "games"]);
Route::get('/games/{gameslug}', [AppController::class, "game"]);
Route::get('/addgame', [AppController::class, "add_new_game"]);
Route::post('/postgame', [AppController::class, "new_game"]);
Route::get('/carros', [AppController::class, "carros"]);
Route::get('/carros/{carroslug}', [AppController::class, "carro"]);
