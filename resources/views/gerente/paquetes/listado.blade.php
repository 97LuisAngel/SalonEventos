@extends('layouts.master')
@section('content')
<div class="row">
    <div class="container">
        {{-- AGREGAMOS BOTÓN PARA AGREGAR | LUIS ÁNGEL REYES --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Paquetes</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{ url('gerente/paquetes/agregar') }}"><button type="button"
                     class="btn btn-outline-success glyphicon glyphicon-file"> Agregar</button></a>
                </div>
            </div>
        </div>
        {{-- AGREGAMOS BOTÓN PARA AGREGAR | LUIS ÁNGEL REYES --}}

        {{-- TABLA DE LISTADO DE PAQUETES | LUIS ÁNGEL REYES --}}
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Paquete</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Foto 1</th>
                    <th scope="col">Foto 2</th>
                    <th scope="col">Foto 3</th>
                    <th scope="col">Opción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paquetes as $paquete)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $paquete->descripcion }}</td>
                    <td>{{ $paquete->precio }}</td>
                    <td><img class="img-thumbnail" src="{{ asset('storage').'/'.$paquete->foto1 }}" alt="" width="200"></td>
                    <td><img class="img-thumbnail" src="{{ asset('storage').'/'.$paquete->foto2 }}" alt="" width="200"></td>
                    <td><img class="img-thumbnail" src="{{ asset('storage').'/'.$paquete->foto3 }}" alt="" width="200"></td>
                    <td><a href="{{ url('gerente/paquete/'.$paquete->id.'/editar') }}"><button type="button" class="btn btn-success">Actualizar</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- TABLA DE LISTADO DE PAQUETES | LUIS ÁNGEL REYES --}}
        {{-- ROW | CONTAINER --}}
    </div>
</div>
@endsection


