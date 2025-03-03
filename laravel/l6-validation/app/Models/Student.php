<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    // protected $table = 'students'; 
    
    //o laravel mete plural no nome da tabela automaticamente, quando damos o nome na classe.
    // por exemplo, se a classe fosse 'Car', o laravel daria o nome de 'cars' à tabela no mysql

    protected $fillable = [
        'firstName', 
        'lastName', 
        'email',
        'studentNumber',
        'phoneNumber'
    ];
}
