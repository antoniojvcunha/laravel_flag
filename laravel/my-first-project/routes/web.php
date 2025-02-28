<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {

    Log::info($request);


    $name = $request["name"];

    return view('home', ["name" => "$name"]);
});
