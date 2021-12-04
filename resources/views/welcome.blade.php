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

                    <!-- INICIAR SESION - REGISTRO -->
                    @if (Route::has('login'))
                        <div class="ms-auto">
                            @auth
                                <a href="{{ url('/proyectos') }}" role="button" class="btn btn-dark">Mi Perfil</a>
                            @else
                                <a href="{{ route('login') }}" role="button" class="btn btn-primary">Inciar sesión</a>

        
                            @endauth
                        </div>
                    @endif
                    </div>
                </div>
            </nav>
            <!-- end NAV BAR-->

            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Bienvenido a<br> Freelance</h1>
                    <br>
                    <p class="lead">¡Comperte tus nuevos diseños y proyectos con el mundo! </p>
                    <p class="lead">Freelance es una comunidad digital que te permite promocionar tus habilidades y darte a conocer en la comunidad.</p>
                    <br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/proyectos') }}" role="button" class="btn btn-dark btn-lg">Mi Perfil</a>
                            @else
                                <a href="{{ route('login') }}" role="button" class="btn btn-primary btn-lg">Inciar sesión</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" role="button" class=" btn-lg ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-dark">Registrarse</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="https://source.unsplash.com/800x600/?marketing, branding, modeling, ilustration" alt="" width="720">
                </div>
                </div>
            </div>

            <!-- FOOTER -->
            <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                <a href=""><ion-icon name="caret-up-outline" size="large"></ion-icon></a>
                </p>
                <p class="mb-1">Freelance &copy; </p>
                <p class="mb-0">All rights reserved.</p>
            </div>
            </footer>
            <!-- END FOOTER -->
            </div>
        </div>
    </body>
</html>
