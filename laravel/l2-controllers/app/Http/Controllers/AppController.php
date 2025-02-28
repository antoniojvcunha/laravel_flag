<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    //

    public function home()
    {
        return view('welcome');
    }

    // public function about()
    // {
    //     return view('about');
    // }

    public function about(Request $request)
    {
        $name = $request->input('name', "guest");
        Log::debug("$name");
        return view("about");
    }

    public function users(string $username)
    {
        Log::debug($username);
        return view('users', ['username' => $username]);
    }

    public function randomPage()
    {
        return view('random');
    }

    public function movies()
    {
        $movies = DB::select('SELECT * FROM movies');
        // Log::debug($movies);
        return view('movies', ['movies' => $movies]);
    }

    public function games()
    {
        $games = DB::select('SELECT *, YEAR(release_date) AS release_year FROM games');
        return view('games', ['games' => $games]);
    }

    public function game(string $gameslug)
    {
        $games = DB::select('SELECT * FROM games WHERE slug = ?', [$gameslug]);
        Log::debug($gameslug);
        return view('game', ['game' => $games[0]]);
    }

    public function add_new_game()
    {
        return view('addgame');
    }

    public function new_game(Request $request) {
        $title = $request->input('title');
        $slug = $request->input('slug');
        DB::insert("INSERT INTO games (title, slug, release_date) VALUES (?,?, NOW())", [$title, $slug]);
        return redirect('/games');
    }

    public function carros()
    {
        $carros = DB::select("SELECT * FROM carros");
        return view("carros", ["carros" => $carros]);
    }

    public function carro(string $carroslug)
    {
        $carros = DB::select("SELECT * FROM carros WHERE slug = ?", [$carroslug]);
        return view("carroDetails", ["carro" => $carros[0]]);
    }
}
