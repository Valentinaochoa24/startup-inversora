
@extends('adminLayout')

@section('title', 'Propuestas')

@section('styles')
<style>
        /* Estilos adicionales */
        .form-group label {
            font-weight: bold;
        }

        /* Estilos para los mensajes de ayuda */
        .form-text {
            font-size: 0.8rem; /* Tamaño de fuente más pequeño */
            color: red; /* Color de texto gris */
        }

        /* Estilos para resaltar campos inválidos */
        .invalid-input {
            border-color: #dc3545 !important; /* Color de borde rojo */
        }

        /* Estilos para resaltar campos válidos */
        .valid-input {
            border-color: #28a745 !important; /* Color de borde verde */
        }

    </style>
@endsection

@section('content')
@if($user->perfil != 0)
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <h2>Listado de propuestas</h2>
            </div>
            <div class="col-md-6 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearpropuestaModal">
                    Crear Nueva propuesta
                </button>

            </div>
        </div>
       
        <table id="propuestas-table" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Fecha de propuesta</th>
                    <th>Descripciòn</th>
                    <th>Monto</th>
                    <th>Documento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($propuestas as $propuesta)
                <tr>
                    <td>{{ $propuesta->id }}</td>
                    <td>{{ $propuesta->nombre }}</td>
                    <td>{{ $propuesta->estado }}</td>
                    <td>{{ $propuesta->created_at }}</td>
                    <td>{{ $propuesta->descripcion }}</td>
                    <td>{{ $propuesta->monto }}</td>
                    <td>
                        <a href="/storage/{{ $propuesta->documento }}" download>
                            <i class="fa fa-file-pdf-o"></i> Descargar PDF
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>



    <div class="modal fade" id="crearpropuestaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Nueva propuesta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container mt-5">
                        <form id="propuestaForm" action="/propuestas/propuestas/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre de la propuesta:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required title="Por favor, ingresa el nombre de la propuesta.">
                            <div class="form-text" id="nombreHelp"></div>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción de la propuesta:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required title="Por favor, proporciona una descripción detallada de la propuesta."></textarea>
                            <small class="text-muted" id="descripcionCount">0 / 3000 caracteres</small>
                            <div class="form-text" id="descripcionHelp"></div>
                        </div>
                        <div class="mb-3">
                            <label for="monto" class="form-label">Monto requerido:</label>
                            <input type="text" class="form-control" id="monto" name="monto" required title="Por favor, especifica el monto requerido para la propuesta (solo números).">
                            <div class="form-text" id="montoHelp"></div>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Documento (PDF):</label>
                            <input type="file" class="form-control" id="documento" name="documento" accept=".pdf" required title="Adjunta un documento más detallado de la propuesta.">
                            <div class="form-text" id="documentoHelp"></div>
                        </div>
                        <div class="mb-3">
                            <label for="imagenpropuesta" class="form-label">Imagen de la propuesta (JPG o PNG):</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" accept=".jpg, .png" required>
                            <small class="form-text" id="imagenError"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>


@else
<div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <h2>Listado de propuestas</h2>
            </div>
        </div>
       
        <table id="propuestas-table" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Solicitante</th>
                    <th>Descripciòn</th>
                    <th>Monto</th>
                    <th>Documento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allPropuestas as $propuesta)
                <tr>
                    <td>{{ $propuesta->id }}</td>
                    <td>{{ $propuesta->nombre }}</td>
                    <td>{{ $propuesta->estado }}</td>
                    <td>{{ $propuesta->userFromPropuesta["nombre"] }}</td>
                    <td>{{ $propuesta->descripcion }}</td>
                    <td>{{ $propuesta->monto }}</td>
                    <td>
                        <a href="/storage/{{ $propuesta->documento }}" download>
                            <i class="fa fa-file-pdf-o"></i> Descargar PDF
                        </a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aprobarrpropuestaModal" data-id="{{ $propuesta->id }}">
                            aprobar
                        </button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

<div class="modal fade" id="aprobarrpropuestaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aprobar Propuesta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/propuestas/propuestas/aprobar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="monto" class="form-label">Monto a aprobar:</label>
                <input type="text" class="form-control" id="monto" name="monto" required>
                <div class="form-text" id="montoHelp">Por favor, especifica el monto a aprobar para la propuesta.</div>
            </div>
            @if(isset($propuesta))
            <input type="hidden" name="id_propuesta" id="id_propuesta" value="{{ $propuesta->id }}">
            @endif
            <button type="submit" class="btn btn-primary">Aprobar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endif
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
            $('#aprobarpropuestaModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Botón que activó el modal
                var idPropuesta = button.data('id'); // Extraer el valor del atributo data-id
                var modal = $(this);
                modal.find('#id_propuesta').val(idPropuesta); // Asignar el valor al campo oculto id_propuesta
            });
        });
</script>

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
    <script>
        // Expresión regular para validar el nombre (acepta caracteres especiales, ñ y tildes)
        var nombreRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;

        // Expresión regular para validar el monto (solo números)
        var montoRegex = /^\d+$/;

        

        // Función para validar el monto
        function validarMonto() {
            var monto = document.getElementById("monto").value;
            var montoHelp = document.getElementById("montoHelp");
            if (!montoRegex.test(monto)) {
                montoHelp.innerText = "El monto debe ser un número.";
                return false;
            } else {
                montoHelp.innerText = "";
                return true;
            }
        }

        // Agregar eventos de entrada para validar en tiempo real
        document.getElementById("monto").addEventListener("input", validarMonto);

    </script>
@endsection
