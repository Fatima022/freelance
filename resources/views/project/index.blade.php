@extends('layouts.app')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Freelance</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>

  <!-- BODY -->
  <body>
    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
            <strong>Freelance</strong>
            </a>
            <div class="btn-group">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ModalCrear">Agregar Proyecto</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                    </li>
                </ul>
            </div>
        </div>
      </div>
    </header>

    <section class="py-5 container ">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto text-center">
          <h1 class="fw-light text-center">Bienvenid@ {{ Auth::user()->name }}</h1>
          <p class="lead text-muted text-center">¡Agrega nuevos proyectos y date a conocer en la comunidad!</p>
          <p>
            <a href="" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#ModalCrear">Agregar Proyecto</a>
            <a href="/" class="btn btn-secondary my-2">Descubrir</a>
          </p>
        </div>
      </div>
      @include('project.utilities._create_modal')
    </section>
  
    
      <!-- CARD 1 -->
      <div class=" py- bg-light">
        <div class="container">
          <div class="row justify-content-center">
              @foreach ($projects as $project)
              <div class="card col-3 ms-3">
                <table class="table table-sm ">
                <tbody>
                   <!-- IMG -->
                  <div class="bg-image hover-overlay ripple shadow-1-strong rounded">
                      <img src="{{ asset('img/' . $project->file) }}" class="card-img-top" alt="">
                  </div>
                  <!-- END IMG -->

                  <!-- TITULO -->
                  <div class="card-img-overlay">
                      <h1 class="card-title text-white text-center">{{$project->title}}</h1>
                  </div>
                  <!-- END TITULO -->

                  <!-- DESCRIPTION -->
                  <div class="card-body">
                    <p class="card-text">{{$project->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <!-- END DESCRIPTION -->
                  
                  <!-- BOTONOES DE ACCION -->
                  <div class="btn-group">
                    <!-- CATEGORIA -->
                      @foreach($categories as $category)
                        <a href="#" role="button" class="btn btn-outline-info">{{ $category->name}}</a>
                      @endforeach
                    <!-- END CATEGORIA -->

                    <!-- EDITAR -->
                    <form method="GET" action="{{ route('proyectos.edit',$project->id) }}">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-sm btn-outline-secondary">Editar</button>
                    </form>

                    <!-- BORRAR -->
                    <form method="POST" action="{{ route('proyectos.destroy', $project->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                  </div>
                  <!-- END BOTONOES DE ACCION -->
                  
                  <small class="text-muted">
                    <p class="mb-0 ms-3">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</p>
                  </small>
                  </thead>
                </tbody>
                </table>
              </div>
              @endforeach
            </div>
        </div>
      </div>
      <!-- END CARD 1 -->

      <section class="py-5 container ">
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
      </section>
  </body>
</html>