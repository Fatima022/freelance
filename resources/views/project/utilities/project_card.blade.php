<!-- CARD 1 -->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class="card shadow-sm">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded">
                <img src="{{ asset('img/' . $image->file) }}" class="card-img-top" alt="Hola">
            </div>
            <div class="card-img-overlay">
                <h1 class="card-title text-white text-center">{{$project->title}}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">{{$project->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#" role="button" class="btn btn-outline-info">Categoria</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                </div>
                <small class="text-muted">9 mins</small>
                </div>
        </div>
    </div>
</div>
<!-- END CARD 1 -->