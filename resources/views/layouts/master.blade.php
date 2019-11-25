<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celebralo | Sistema</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="logo">
                <img src="/images/vector_black.png">
            </div>
            {{-- UserName Seccion Right-alidne with | Luis Ángel Reyes--}}
            <ul class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    @endif
                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        <h5>Bienvenido</h5> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>

            {{-- UserName Seccion Right-adline with | Luis Ángel Reyes --}}
        </nav>

        <ul class="nav nav-tabs nav justify-content-center" >
            <li class="nav-item">
                <a class="nav-link active" href="">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#profile" aria-selected="true">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tablist" href="{{ url('gerente/paquetes') }}">Paquetes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" >Usuarios</a>
            </li>
        </ul>
        {{-- EN ESTA PARTE SE ANEXA EL CONTENIDO | LUIS ÁNGEL REYES--}}
        <main class="py-md-4">
            @yield('content')
        </main>
        {{-- EN ESTA PARTE SE ANEXA EL CONTTENIDO DE LAS PLANTILLAS |LUIS ÁNGEL REYES --}}
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</html>
