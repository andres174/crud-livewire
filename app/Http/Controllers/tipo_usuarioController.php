<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipo_usuarioController extends Controller
{
    //
    public function index(){
        return view('pages.tipoUsuario');
    }
}
