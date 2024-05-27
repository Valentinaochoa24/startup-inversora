@extends('adminLayout')

@section('title', 'Eventos')

@section('styles')
<style>
    input.error{
    border: 1px solid red;
   }
   .error-message {
    color: red;
    font-size: 14px;
    margin-top: 1px;
   }
   .text-error {
    color: red;
    font-size: 14px;
    margin-top: 1px;
   }
</style>
@endsection

@section('content')
<div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <h2>Listado de Eventos</h2>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearEventoModal">
                    Crear Nuevo Evento
                </button>

            </div>
        </div>
       
        <table id="eventos-table" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Fecha de evento</th>
                    <th>Descripciòn</th>
                    <th>Ubicacion</th>
                    <!-- Agrega más columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                @foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->id }}</td>
                    <td>{{ $evento->nombre }}</td>
                    <td>{{ $evento->tipo }}</td>
                    <td>{{ $evento->fecha_evento }}</td>
                    <td>{{ $evento->descripcion }}</td>
                    <td>{{ $evento->ubicacion }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>



    <div class="modal fade" id="crearEventoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="eventoForm" action="/administracion/eventos/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del Evento:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <div class="error-message" id="nombreHelp"></div>
                    </div>
                    <div class="form-group">
                        <label for="tipoEvento">Tipo de Evento:</label>
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value="0">Conferencia</option>
                            <option value="1">Evento Virtual</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fechaEvento">Fecha del Evento:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcionEvento">Descripción del Evento:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="3000" required></textarea>
                        <small class="text-muted" id="descripcionCount">0 / 3000 caracteres</small>
                    </div>
                    <div class="form-group">
                        <label for="ubicacionEvento">Ubicación del Evento:</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                    </div>

                    <div class="form-group">
                        <label for="imagenEvento">Imagen del Evento (JPG o PNG, máximo 1MB):</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" accept=".jpg, .png" required>
                        <small class="text-error" id="imagenError"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>



        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para validar el campo nombre en tiempo real
        var nombreInput = document.getElementById('nombre');

        nombreInput.addEventListener('input', function() {
            var nombre = this.value.trim();
            var nombreHelp = document.getElementById('nombreHelp');
            if (!/^[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+$/.test(nombre)) {
                nombreHelp.innerText = 'El nombre solo puede contener letras y los caracteres especiales "ñ" y tildes.';
            }else if (nombre == "") {
                nombreHelp.innerText = 'El nombre no puede estar vacio.';
            } else {
                nombreHelp.innerText = '';
            }
        });
        var descripcionInput = document.getElementById('descripcion');
        var descripcionCount = document.getElementById('descripcionCount');

        
        // Función para actualizar el contador de caracteres
        descripcionInput.addEventListener('input', function() {
            var count = this.value.length;
            descripcionCount.textContent = count + ' / 3000 caracteres';
        });

        var imagenInput = document.getElementById('imagen');
        var imagenError = document.getElementById('imagenError');

        // Función para validar la imagen
        imagenInput.addEventListener('change', function() {
            var file = this.files[0];
            if (file) {
                var fileSize = file.size; // Tamaño en bytes
                var fileType = file.type; // Tipo de archivo

                // Validar el tipo de archivo
                if (!fileType.match(/^image\/(jpg|jpeg|png)$/)) {
                    imagenError.textContent = 'Por favor, seleccione una imagen en formato JPG o PNG.';
                    this.value = ''; // Limpiar el valor del input
                    return;
                }

                // Validar el tamaño del archivo (1MB)
                var maxSize = 1 * 1024 * 1024; // 1MB en bytes
                if (fileSize > maxSize) {
                    imagenError.textContent = 'La imagen no debe superar 1MB de tamaño.';
                    this.value = ''; // Limpiar el valor del input
                    return;
                }

                // Si la imagen es válida, limpiar el mensaje de error
                imagenError.textContent = '';
            }
        });
    });
</script>

@section('scripts')

@endsection
