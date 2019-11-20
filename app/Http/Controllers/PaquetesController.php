<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaquetesController extends Controller
{
    //Funciones para el controlador de Paquetes
    public function index(){
        return view('paquetes');
    }
}
