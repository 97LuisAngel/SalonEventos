@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Registra tu evento</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ url('cliente/inicio') }}"><button type="button" class="btn btn-outline-success glyphicon glyphicon-file"> Regresar</button></a>
            </div>
        </div>
    </div>
    {{-- FORMULARIO DE AGREGAR --}}
<form action="{{ url('cliente/inicio') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="row">
            <div class="col">
                <label for="Fecha">{{ 'Fecha' }}</label>
                        <input class="form-control" type="date" name="fecha" value="">
            </div>
            <div class="col">
                <label for="Hora">{{ 'Hora' }}</label>
                <input class="form-control" type="time" name="hora" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="Tipo de Evento">{{ 'Tipo evento' }}</label>
            <input class="form-control" type="text" name="tipo" value="">
        </div>
        <div class="form-group">
            <label for="Tipo de paquete">{{ 'Tipo de paquete' }}</label>
            <input class="form-control" type="text" name="paquete_id" value="">
        </div>
        <input class="btn btn-primary" type="submit" value="Agregar">
</form>
</div>
@endsection
