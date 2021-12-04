<div class="card shadow-sm">
                
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
                    <a href="#" role="button" class="btn btn-outline-info">{{ $project->category->name ?? ''}}</a>
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
                    <p class="mb-0">{{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</p>
                  </small>
                  </thead>
                </tbody>
                </table>
              </div>