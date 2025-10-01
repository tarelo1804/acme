@extends('admin.layouts.main')

@section('contenido')
    <h1>Planos Arquitectónicos</h1>
    <div class="d-flex justify-content-between">
        <div>
            <!-- Espacio izquierdo vacío -->
        </div>
        <div>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalAgregar">
                Agregar
            </button>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Archivo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($drawings as $drawing)
                    <tr>
                        <td>{{ $drawing->id }}</td>
                        <td>{{ $drawing->name }}</td>
                        <td>{{ $drawing->description }}</td>
                        <td>{{ $drawing->project->name }}</td>
                        <td>
                            <div>
                                <span class="d-block">{{ basename($drawing->file_path) }}</span>
                                <div class="d-flex gap-3 mt-1">
                                    <a href="{{ route('admin.drawings.show', $drawing->id) }}" 
                                       class="btn btn-info btn-sm" 
                                       target="_blank">
                                        <i class="fas fa-eye"></i> Ver
                                    </a>
                                    <a href="{{ route('admin.drawings.download', $drawing->id) }}" 
                                       class="btn btn-success btn-sm">
                                        <i class="fas fa-download"></i> Descargar
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" 
                                    data-toggle="modal" 
                                    data-target="#modalEliminar" 
                                    data-id="{{ $drawing->id }}"
                                    data-name="{{ $drawing->name }}">X</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal de Confirmación para Eliminar -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Está seguro que desea eliminar el plano "<span id="planoAEliminar"></span>"?
                    <br>
                    <div class="alert alert-warning mt-3">
                        <i class="fas fa-exclamation-triangle"></i> Esta acción no se puede deshacer.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form id="formEliminar" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Agregar -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAgregarLabel">Agregar Plano</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.drawings.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre del Plano</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" required rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="project_id">Proyecto</label>
                            <select class="form-control" id="project_id" name="project_id" required>
                                <option value="">Seleccione un proyecto...</option>
                                @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="file">Archivo del Plano</label>
                            <input type="file" class="form-control-file" id="file" name="file" required accept=".pdf,.jpg,.jpeg,.png">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
$('#modalEliminar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    var name = button.data('name');
    
    var modal = $(this);
    modal.find('#planoAEliminar').text(name);
    // Construir la URL usando una función auxiliar de Laravel
    var url = "{{ route('admin.drawings.destroy', ':id') }}";
    url = url.replace(':id', id);
    modal.find('#formEliminar').attr('action', url);
});
</script>
@endsection