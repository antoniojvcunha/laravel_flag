<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home']);
Route::get('/coolpaging', [AppController::class, 'coolPaging']);

Route::get('/results', [AppController::class, 'results']);
Route::get('/newgame', [GameController::class, 'newGame']);

Route::post('/newgamehandler', [GameController::class, 'newGameHandler']);
Route::delete('/home/{id}', [GameController::class, 'deleteGame'])->name('home.deleteGame');
