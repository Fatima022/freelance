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

            <section class="py-5 container ">
      <!-- CARD 1 -->
      <div class="album py-3 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
            @if(isset($rooms))
              @foreach ($projects as $project)
                @include('project.utilities._project_card')
              @endforeach
            @endif
            </div>
          </div>
        </div>
      </div>
      <!-- END CARD 1 -->
      </section>

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
