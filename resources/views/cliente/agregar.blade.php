@extends('layouts.app')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
            <h1 class="h2"> Registra tu Eventos</h1>
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
            <div class="form-group">
                    <label for="tipopaquetes">Paquetes</label>
                    <select class="form-control" id="paquetes">
                      <option>Paquete 1</option>
                      <option>Paquete 2</option>
                      <option>Paquete 3</option>
                    </select>
            </div>
        </form>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> </h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group mr-2">
                        <a href="{{ url('cliente/inicio') }}"><button type="button" class="btn btn-sm btn-outline-secondary"> Registrar Evento</button></a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
