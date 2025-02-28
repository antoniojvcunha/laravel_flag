<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $fruit = [
        'apple',
        'banana',
        'orange',
        'others'
    ];

    // $sites = [
    //     'youtube',
    //     'instagram',
    //     'facebook',
    //     'amazon',
    //     'netflix'
    // ];

    // or

    $sites = [
        'youtube' => 'https://www.youtube.com',
        'instagram' => 'https://www.instagram.com',
        'facebook' => 'https://www.facebook.com',
        'amazon' => 'https://www.amazon.com',
        'netflix' => 'https://www.netflix.com'
    ];

    $data = [
        "title" => "Bem-vindo ao meu site",
        "fruit" => $fruit,
        "sites" => $sites
    ];



    //criar uma lista de links para 5 dos vossos sites favoritos

    return view('home', $data);
});
