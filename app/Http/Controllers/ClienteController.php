<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClienteController extends Controller
{

    public function index(){
        return view('cliente.listado');
    }

    public function create(){
        return view('cliente\agregar');
    }

    public function visualizar(){
        return view('cliente\mostrar');

    }

    public function update(){

    }
    public function delete(){

    }





}
