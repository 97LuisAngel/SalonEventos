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
                  <a class="nav-link disabled" href="{{ url('/paquetes') }}" tabindex="-1" aria-disabled="true">Paquetes</a>
                </li>
              </ul>
        {{-- END-NavBar --}}


            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"> Evento</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                          <div class="btn-group mr-2">
                            <a href="{{ url('cliente/inicio') }}"><button type="button" class="btn btn-outline-success glyphicon glyphicon-file"> Guardar</button></a>
                        </div>
                    </div>
                </div>
            <form>
                    <div class="row">
                      <div class="col">
                          <label for="">Subida por</label>
                        <input type="hidden" class="form-control">
                      </div>
            </form>
            <br><br><br>



            <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">FOTOGRAFIAS</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                                <div class="col-md-12">
                                        <div class="card mb-4 shadow-sm">
                                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></svg>
                                          <div class="card-body">
                                            <p class="card-text">FOTO 1</p>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">Actualizar <input type="file" name="" id=""></button>
                                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                                  </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <small class="text-muted">9 mins</small>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                        </th>
                        <td>
                                <div class="col-md-12">
                                        <div class="card mb-4 shadow-sm">
                                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"></svg>
                                          <div class="card-body">
                                            <p class="card-text">FOTO 1</p>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">Actualizar <input type="file" name="" id=""></button>
                                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                                  </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <small class="text-muted">9 mins</small>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                        </td>
                      </tr>

                    </tbody>
                  </table>

    </div>



@endsection
