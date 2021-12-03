@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buscar Proyectos</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">   

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="antialiased">
        <div class="row justify-content-center">
            <div class="col-md-12 mx-auto">

            <!--NAV BAR-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Freelance</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mx-0 mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">3D</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Branding</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Ilustraciones</a></li>
                        </ul>
                    </ul>

                    <div class="ms-auto">
                        <form class="d-flex">
                            <input class="form-control mx-2" style="width:auto" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-info" type="submit">Search</button>
                        </form>
                    </div>

                    <!-- INICIAR SESION - REGISTRO -->
                    @if (Route::has('login'))
                        <div class="ms-auto">
                            @auth
                                <a href="{{ url('/proyectos') }}" role="button" class="btn btn-dark">Mi Perfil</a>
                            @else
                                <a href="{{ route('login') }}" role="button" class="btn btn-primary">Inciar sesión</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" role="button" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
                </div>
            </nav>
            <!-- end NAV BAR-->

            <h1>Subir Imagen</h1>
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data"> 
                {{ csrf_field() }}

                <input type="text" name="name"><br>
                <input type="file" name="image"><br>
                <button type="submit">Guardar imagen</button>
            </form>
            <br>
            <hr>
            <h2>Galeria</h2>
            <hr>
            <br>
            @foreach ($images as $image)
                <img src="{{ asset('img/' . $image->file) }}" alt="">
            @endforeach
            </div>
        </div>
    </body>
</html>
