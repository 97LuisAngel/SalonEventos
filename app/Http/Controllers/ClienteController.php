<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;


class ClienteController extends Controller
{

    public function index(){

        $datos['cliente']=Evento::paginate(10);
        return view('cliente.listado',$datos);
    }

    public function create(){
        return view('cliente\agregar');
    }

    public function store(Request $request){

        //para almacenar en la base de datos
       $datosCliente=request()->except('_token');
       Evento::insert($datosCliente);
       //return response()->json($datosCliente);
       return redirect('cliente/inicio');

    }

    public function visualizar(){
        return view('cliente\mostrar');

    }








}
