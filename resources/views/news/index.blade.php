<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7f7f7;
            /* Fondo oscuro */
            color: rgb(14, 10, 10);
            /* Texto blanco */
        }

        .card-title {
            color: rgb(0, 0, 0);
            /* Títulos en letras rojas */

        }
    
    </style>
</head>

<body>
    <!-- Navigation-->
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-light"  href="{{ route('Inicio') }}">INICIO</a>
                <button class="navbar-toggler  text-light text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" 
                                href="{{ route('portafolio') }}">Portafolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded  text-light"
                                href="{{ route('about') }}">Acerca De Mi</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light"
                                href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <br> <br>
        <picture >
            <img src="{{asset('images/Google_2015_logo.svg.png')}}" alt="google.logo " height="120" >
            <p>Esta es una demostración de consumo de  API-GOOGLE NEWS</p>
        </picture>
        <h1 class="mb-4">Ultimas Noticias</h1>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $article['source']['name'] }}</h6>
                            <p class="card-text">{{ $article['description'] }}</p>
                            <a href="{{ $article['url'] }}" class="card-link">Leer Más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $articles->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
