<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', [StudentController::class, 'students']);
Route::get('/addstudent', [StudentController::class, 'addStudent']);
Route::post('/addstudent', [StudentController::class, 'postStudent']);