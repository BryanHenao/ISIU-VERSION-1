<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlladorWelcome extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function Documentos(){
        return view('Documentos');
    }
}

