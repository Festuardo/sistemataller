<!DOCTYPE html>
<html>
<head>
    <title>Taller de Reparación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">Taller de Reparación</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/clientes') }}">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tecnicos') }}">Técnicos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/equipos') }}">Equipos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/marcas') }}">Marcas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/servicios') }}">Servicios</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
