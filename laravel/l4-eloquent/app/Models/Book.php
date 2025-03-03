<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // por defeito vai buscar o plural, mas podemos sempre config o nome de tabela que quisermos
    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'isbn'
    ];
}