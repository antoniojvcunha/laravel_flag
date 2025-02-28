<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //por defeito a tabela vem com nome no plural, mas podemos configurar nos o nome
    protected $table = 'books';

    protected $fillable = ['title', 'author', 'isbn'];
}
