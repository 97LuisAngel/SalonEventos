@extends('layouts.master')

@section('content')
<div class="row">
    <div class="container">
        {{-- AGREGAMOS BOTÓN PARA AGREGAR | LUIS ÁNGEL REYES --}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Agregar Paquete</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="{{ url('gerente/paquetes') }}"><button type="button"
                    class="btn btn-primary"> Regresar</button></a>
                </div>
            </div>
        </div>
        {{-- AGREGAMOS BOTÓN PARA AGREGAR | LUIS ÁNGEL REYES --}}

        {{-- ESTRUCTURA DE FORMULARIO PARA AGREGAR CONTENIDO | LUIS ÁNGEL REYES --}}

        <form action="{{ url('gerente/paquetes') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="descripcion">{{ 'Descripción' }}</label>
                    <input class="form-control" type="text" name="descripcion" value="">
                </div>
                <div class="form-group">
                    <label for="precio">{{ 'Ingrese el precio' }}</label>
                    <input class="form-control" type="text" name="precio" value="">
                </div>
   
                <div class="row">
                    <div class="col">
                        <label for="Foto-1">{{ 'Foto 1' }}</label>
                        <input type="file" class="form-control-file" name="foto1" id="foto1" value="">
                    </div>
                    <div class="col">
                        <label for="Foto-2">{{ 'Foto 2' }}</label>
                        <input type="file" class="form-control-file" name="foto2" id="foto2" value="">
                    </div>
                    <div class="col">
                        <label for="Foto-3">{{ 'Foto 3' }}</label>
                        <input type="file" class="form-control-file" name="foto3" id="foto3" value="">
                    </div>
                </div>
                <br>
                <input class="btn btn-outline-danger" type="submit" value="Agregar">
        </form>
        {{-- ESTRUCTURA DE FORMULARIO PARA AGREGAR CONTENIDO | LUIS ÁNGEL REYES --}}
    {{-- ROW | CONTAINER --}}
    </div>
</div>
@endsection
