<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//IMPORTAR MODELO
use App\Models\User;    

class UsersController extends Controller
{
    public function getUsers() {
        /* select * from users */
        $data = User::all();
        //dd($data);
        return view('admin/users')
        ->with('usuarios', $data);
    }

}
