<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('pestaña')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="text-center py-5">
        <h1 class="display-4 fw-bold">Mi cafecito</h1>
        <p class="lead slogan">El cafe de cada dia</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">Mi cafecito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Presentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/ordenarProductos')}}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/pedidos')}}">Pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container my-5 p-4">
        @yield('titulo')
        @yield('contenido')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
