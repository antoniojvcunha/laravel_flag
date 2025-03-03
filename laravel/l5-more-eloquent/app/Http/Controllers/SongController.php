<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function getSongs() 
    {

        $song = new Song();
        $songs = $song->all();
        

        $data = [
            'name' => fake()->name(),
            'city' => fake()->city(),
            'streetAddress' => fake()->streetAddress(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'email' => fake()->email(),
            'phoneNumber' => fake()->phoneNumber(),
            'companyName' => fake()->company(),
            
        ];

        return view('songs', $data, compact('songs'));
    }
}
