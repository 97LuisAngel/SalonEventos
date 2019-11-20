@extends('layouts.app')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
            <form>
                    <div class="row">
                      <div class="col">
                            <label for="exampleFormControlInput1">Fecha</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="col">
                            <label for="exampleFormControlInput1">Hora</label>
                            <input type="time" class="form-control" id="exampleFormControlInput2" >
                      </div>
                    </div>
                  </form>
                  <br>
        <form>

            <div class="form-group">
                    <label for="tipoEventos">Tipo de eventos</label>
                    <select class="form-control" id="tipoEventos">
                      <option>Eventos sociales</option>
                      <option>Eventos corporativos</option>
                      <option>Wedding Planner</option>
                    </select>
                  </div>
        </form>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> </h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group mr-2">
                        <a href=""><button type="button" class="btn btn-sm btn-outline-secondary"> Registrar Evento</button></a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
