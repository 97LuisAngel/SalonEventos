@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Reserva tu evento</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <a href="{{ url('cliente/inicio/agregar') }}"><button type="button" class="btn btn-sm btn-outline-secondary"> Crear Evento</button></a>
                </div>
            </div>
        </div>
    <br>
    {{-- TABLA DE EVENTOS POR CONFIRMAR --}}
    <h1 class="h2">Eventos por confirmar</h1>
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Tipo de Evento</th>
                <th scope="col">Paquete</th>
                <th scope="col">Opción</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash">Eliminar</button>
                </td>
              </tr>
            </tbody>
      </table>
      {{-- TABLA DE EVENTOS POR CONFIRMAR --}}

    {{-- end-row --}}
</div>
@endsection
