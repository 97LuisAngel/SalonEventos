<?php
namespace App\Http\Controllers\gerente;
use App\paquete;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



use App\Http\Controllers\Controller;

class PaquetesController extends Controller
{

    public function index()
    {
        $datos['paquetes']=paquete::paginate(10);
        return view('gerente\paquetes\listado',$datos);
    }


    public function create()
    {
        return view('gerente\paquetes\agregar');
    }


    public function store(Request $request)
    {
        //Almacenado todo lo que se enviara desde el formulario por el metodo store | Luis Ángel Reyes
        //$datosPaquete=$request->all();
        
        $datosPaquete=request()->except('_token');
        if($request->hasFile('foto1')){
            $datosPaquete['foto1']=$request->file('foto1')->store('uploads','public');
        }
        if($request->hasFile('foto2')){
            $datosPaquete['foto2']=$request->file('foto2')->store('uploads','public');
        }
        if($request->hasFile('foto3')){
            $datosPaquete['foto3']=$request->file('foto2')->store('uploads','public');
        }

        paquete::insert($datosPaquete);
        
        return response()->json($datosPaquete);
        
    }


    public function show($id)
    {
        //
  
    }

    public function edit($id)
    {
        $paquete= paquete::findOrfail($id);
        return view('gerente\paquetes\editar',compact('paquete'));
    }


    public function update(Request $request, $id)
    {
        //METODO PARA GUARDAR LOS CAMBIOS DE PAQUETES DE LA FUNCION EDIT | LUIS ÁNGEL REYES 
        $datosPaquete=request()->except(['_token','_method']);
        
        if($request->hasFile('foto1')){
            $paquete= paquete::findOrfail($id);
            Storage::delete('public/'.$paquete->foto1);
            $datosPaquete['foto1']=$request->file('foto1')->store('uploads','public');
        }
        if($request->hasFile('foto2')){
            $paquete= paquete::findOrfail($id);
            Storage::delete('public/'.$paquete->foto2);
            $datosPaquete['foto2']=$request->file('foto2')->store('uploads','public');
        }
        if($request->hasFile('foto3')){
            $paquete= paquete::findOrfail($id);
            Storage::delete('public/'.$paquete->foto3);
            $datosPaquete['foto3']=$request->file('foto2')->store('uploads','public');
        }
        paquete::where('id','=',$id)->update($datosPaquete);
        
        $paquete= paquete::findOrfail($id);
        return view('gerente\paquetes\editar',compact('paquete'));

    }

    public function destroy($id)
    {
        //
    }
}
