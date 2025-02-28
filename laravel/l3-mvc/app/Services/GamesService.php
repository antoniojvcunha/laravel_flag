<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class GamesService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllGames()
    {
        $result = DB::select("SELECT * FROM games");

        return $result;
    }

    public function searchGamesByTitle($title)
    {
        $result = DB::select("SELECT * FROM games WHERE title LIKE ?", ["%$title%"]);

        return $result;
    }

    public function new_game(Request $request) {
        $title = $request->input('title');
        $slug = $request->input('slug');
        DB::insert("INSERT INTO games (title, slug) VALUES (?,?)", [$title, $slug]);
        return redirect('/results');
    }

    public function delete_game($id)
    {
        DB::delete("DELETE FROM games WHERE id =?", [$id]);
        return redirect('/');
    }

    public function getGamesPage($page)
    {

        $limit = 5;
        $offset = $limit * ($page - 1);
        $result = DB::select("SELECT * FROM games LIMIT ? OFFSET ?", [$limit, $offset]);
        return $result;
    }

  public function getGamesPage2()
  {
    $result = DB::table('games')->paginate(5);
    return $result;
  }
}
