@extends('layouts.app')



@section('content')

<div class="row">
    <div class="container">
        {{-- Nav-Bar-MenúDashboars --}}
        <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ url('cliente/inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Mis Eventos</a>
                </li>
              </ul>
        {{-- END-NavBar --}}





        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Reserva tu evento</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <a href="{{ url('cliente/inicio/agregar') }}"><button type="button" class="btn btn-outline-success glyphicon glyphicon-file"> Crear Evento</button></a>
                </div>
            </div>
        </div>
    <br>
    {{-- TABLA DE EVENTOS POR CONFIRMAR --}}
    <h1 class="h2">Eventos por confirmar</h1>
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Tipo de Evento</th>
                <th scope="col">Paquete</th>
                <th scope="col">Estatus</th>
                <th scope="col">Opción</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row"></th>
                <td><a href="">Evento1</a></td>
                <td></td>
                <td></td>
                <td>Confirmado</td>
                <td>
                    <a href="{{ url('cliente/inicio/agregar') }}"><button type="button" class="btn btn-success">Actualizar</button></a>
                    <button type="button" class="btn btn-danger glyphicon glyphicon-trash">Eliminar</button>
                </td>
              </tr>
            </tbody>
      </table>
      {{-- TABLA DE EVENTOS POR CONFIRMAR --}}

      {{-- TABLA DE EVENTOS CONFIRMADOS --}}

      <br>
      <br>
    <h1 class="h2">Eventos confirmados</h1>
    <table class="table table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col">Evento</th>
                <th scope="col">Hora</th>
                <th scope="col">Tipo de Evento</th>
                <th scope="col">Paquete</th>
                <th scope="col">Precio</th>
                <th scope="col">Opción</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th><a href="">Evento1</a></th>
                <td></td>
                <td></td>
                <td></td>
                <td>Confirmado</td>
                <td>
                    <button type="button" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </td>
              </tr>
            </tbody>
      </table>
      {{-- TABLA DE EVENTOS CONFIRMADOS --}}

    {{-- end-row --}}
</div>


@endsection

