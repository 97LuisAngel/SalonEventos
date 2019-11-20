<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    // FUNCIONES PARA LA PARTE DE EMPLEADOS -> LUIS ÁNGEL REYES

    public function index(){
        return view('empleado\home');
    }

    public function create(){
        return view('empleado/agregar');
    }
}
