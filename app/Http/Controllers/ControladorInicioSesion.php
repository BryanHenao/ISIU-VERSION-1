<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorInicioSesion extends Controller
{
    public function viewLogin(){
        return view('Login_Evaluadores');
    }
}
