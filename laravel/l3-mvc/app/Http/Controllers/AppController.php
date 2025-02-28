<?php

namespace App\Http\Controllers;

use App\Services\GamesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    private $gameService;

    public function __construct()
    {
        $this->gameService = new GamesService();
    }

    public function home(Request $request)
    {

        $page = $request->input("page", 1);
        //$result = $this->gameService->getAllGames();
        $result = $this->gameService->getGamesPage(1);
        

        return view('home', ['games' => $result]);
    }

    public function coolpaging() 
    {
        $result = $this->gameService->getGamesPage2();
        return view('home', ['games' => $result]);
    }

    public function results(Request $request)
    {
        $searchTitle = $request->input('search', '');
        $result = $this->gameService->searchGamesByTitle($searchTitle);

        $data = [
            'games' => $result,
            'search' => $searchTitle
        ];

        return view('results', $data);
    }

    

    
}