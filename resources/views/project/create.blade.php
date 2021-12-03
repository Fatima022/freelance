@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Crear Projecto</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('proyectos.store')}}">
                            {{csrf_field() }}
                            <div class="form-group">
                                <label>Titulo del proyecto</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea name="description" class="form-control" rows="3">
                                </textarea>
                            </div>
                            <!-- AGREGAR CATEGORIA
                            <div class="form-group">
                                <label for="categoria">Tu categoria</label>
                                <select class="form-control" id="categoria" name="categoria_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                 @endforeach
                                </select>
                            </div>
                            -->
                            <br>
                            <input type="file" name="image"><br>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection