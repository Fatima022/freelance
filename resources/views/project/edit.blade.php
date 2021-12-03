@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">EDITAR TAREA</div>

                <div class="card-body">

      <form method="POST" action=" {{ route('proyectos.update', $project->id) }} " class="text-left" enctype="multipart/form-data">
          {{csrf_field() }}
          {{ method_field('PUT') }}

        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="title" require=""
                        value="{{$project->title}}" required="">
                    
                    </div>
                </div>
                <br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Categoria</label>
                        <select name="category" class="form-control">
                            <option value="3D">3D</option>
                            <option value="Branding">Branding</option>
                            <option value="Ilsutraciones">Ilustración</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="">Descripción</label>
                <textarea class="form-control" name="description" rows="3" required="">
                    {{$project->description}}
                </textarea>
            </div>
            <br>
            <label for="">Nombre de imagen</label>
            <input type="text" name="name"><br>
            <input type="file" name="file">
                <img src="{{ asset('img/' . $project->file) }}" class="card-img-top" alt="">
            <br>
            <br>


        </div>
        <div class="modal-footer">
            <a href="{{ route('proyectos.index') }}" class="btn btn-outline-dark">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
        </div>
      </form></div>
            </div>
        </div>
    </div>
</div>
@endsection