<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function students()
    {
        return view('students');
    }

    public function addStudent()
    {
        return view('addstudent');
    }

    public function postStudent(Request $request)
    {
        Log::debug($request);

        // $firstName =  $request->input('firstName');

        // if (strlen($firstName) < 1 || strlen($firstName) > 25) {
        //     Log::debug('Não está bem');
        // } else {
        //     Log::debug('Tudo ok');
        // }

        $request->validate([
            'firstName' => 'required|min:1|max:25',
            'lastName' => 'required|min:1|max:25',
            'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'studentNumber' => 'required|integer|min:1|max:999',
            'phoneNumber' => ['required', 'regex:/^((9[1236]\d{7})|(2\d{8}))$/']

        ]);
        
        Log::debug('OKAPA 👍');
        

        // o codigo so continua se a validaçao passar


    }
}
