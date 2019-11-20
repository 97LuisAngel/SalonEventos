@extends('layouts.app')



@section('content')

<div class="row">
    <div class="container">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="{{ url('cliente/inicio') }}" role="tab" aria-controls="home" aria-selected="true">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mis Eventos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"></a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>



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
