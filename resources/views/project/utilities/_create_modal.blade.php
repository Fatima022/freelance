<!-- Modal -->
<div class="modal fade" id="ModalCrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCrear">Crear Nuevo Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action=" {{ route('proyectos.store') }} " class="text-left" enctype="multipart/form-data">
          {{csrf_field() }}
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="title" require="">
                    </div>
                </div>
                <br>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Categoria</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="">Descripción</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <br>
            <label for="">Nombre de la imagen</label><br>
            <input type="text" name="name"><br>
            <input type="file" name="file"><br>
            <br>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
        </div>
      </form>
    </div>
  </div>
