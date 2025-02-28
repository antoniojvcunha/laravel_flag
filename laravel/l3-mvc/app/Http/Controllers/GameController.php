<?php

namespace App\Http\Controllers;

use App\Services\GamesService;
use Illuminate\Http\Request;

class GameController extends Controller
{

    private $gameService;

    public function __construct()
    {
        $this->gameService = new GamesService();
    }




    public function newGame()
    {
        return view('newGame');
    }

    public function newGameHandler(Request $request)
    {
        return $this->gameService->new_game($request);
    }

    public function deleteGame($id)
    {
        return $this->gameService->delete_game($id);
    }

   
}
