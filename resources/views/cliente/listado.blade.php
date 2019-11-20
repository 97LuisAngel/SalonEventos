@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Reserva tu evento</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                  <div class="btn-group mr-2">
                    <a href=""><button type="button" class="btn btn-sm btn-outline-secondary"> Crear Evento</button></a>
                </div>
        </div>
        {{-- end-Container --}}
    </div>
    <br>
    <table class="table">
            <h1 class="jumbotron-heading">Mis Eventos</h1>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>

    {{-- end-row --}}
</div>


@endsection
