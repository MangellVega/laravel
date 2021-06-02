<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(){
        return view('cursos.create');
    }
    public function hola($curso){
        return view('cursos.hola',compact('curso'));
    }
}
