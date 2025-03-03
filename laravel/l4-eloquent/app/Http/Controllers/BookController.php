<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function books()
    {
        // TODO, criar uma pagina a parte para criar livros
        // com tempo um formulario e que ficava bem...
        $book = new Book();
        $book->title = "Sei la";
        $book->author = "nao sei";
        $book->isbn = "ABC123";

        $book->save();


        $books = Book::all();
        return view('books', [
            'books' => $books
        ]);
    }
}