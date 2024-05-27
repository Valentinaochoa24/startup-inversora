@extends('adminLayout')

@section('title', 'Empresa')

@section('styles')
<style>
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
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <h2>Mi empresa</h2>
            </div>
        </div>
       
        <table id="empresa-table" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>RUT</th>
                    <th>Documento RUT</th>
                    <th>Documento representante legal</th>
                    <th>Dossier o carta de presentación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
<tr>
    <td>{{ $empresa->id }}</td>
    <td>{{ $empresa->nombre }}</td>
    <td>{{ $empresa->rut}}</td>
    <td>
        <a href="/storage/{{ $empresa->documento_rut }}" download>
            <i class="fa fa-file-pdf-o"></i> Descargar PDF
        </a>
    </td>
    <td>
        <a href="/storage/{{ $empresa->documento_id_representante }}" download>
            <i class="fa fa-file-pdf-o"></i> Descargar PDF
        </a>
    </td>
    <td>
        <a href="/storage/{{ $empresa->documentos }}" download>
            <i class="fa fa-file-pdf-o"></i> Descargar PDF
        </a>
    </td>
    <td>
        <!-- Botón para editar la empresa -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarEmpresa{{$empresa->id}}">
            Editar
        </button>
        <!-- Modal para editar la empresa -->
        <div class="modal fade" id="editarEmpresa{{$empresa->id}}" tabindex="-1" role="dialog" aria-labelledby="editarEmpresa{{$empresa->id}}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarEmpresa{{$empresa->id}}Label">Editar Empresa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario de edición de la empresa -->
                        <form action="editarEmpresa/{{ $empresa->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12 form-group row">
                                <div class="alert alert-primary col text-center" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="alert-heading">Señor usuario!</h4>
                                    <hr>
                                    <p class="mb-0">Todos los documentos se deben actualizar y son obligatorios.</p>
                                    
                                </div>
                            </div>
                            <div class="col-sm-12 form-group row" >
                                <label class="col-form-label">Nombre de la empresa:</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" value="{{$empresa->nombre}}" name="nombreEmpresa" id="nombreEmpresa" placeholder="Nombre de la empresa" />
                                </div>
                                <div class="form-text" id="nombreHelp"></div>
                            </div>
                            <div class="col-sm-12 form-group row">
                                <label class="col-form-label">RUT de la empresa:</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" value="{{$empresa->rut}}" name="rut" id="rut" placeholder="RUT de la empresa" />
                                </div>
                                <div class="form-text" id="rutHelp"></div>
                            </div>
                           
                            <div class="col-sm-12 form-group row">
                                <label for="documentoRepresentanteLegal">Documento Representante Legal:</label>
                                <input type="file" class="form-control" id="documentoRepresentanteLegal" name="documentoRepresentanteLegal" accept=".pdf" required>
                                <div class="form-text" id="representanteHelp"></div>
                            </div>
                            <div class="col-sm-12 form-group row">
                                <label for="documentorut">Documento RUT:</label>
                                <input type="file" class="form-control" id="documentorut" name="documentorut" accept=".pdf" required>
                                <div class="form-text" id="rutDocHelp"></div>
                            </div>
                            <div class="col-sm-12 form-group row">
                                <label for="documentoAdicional">Dossier o carta de presentación:</label>
                                <input type="file" class="form-control" id="documentoAdicional" name="documentoAdicional" accept=".pdf">
                                <div class="form-text" id="rutHelp"></div>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
@endforeach


                
            </tbody>
        </table>
    </div>



@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#aprobarempresaModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Botón que activó el modal
            var idempresa = button.data('id'); // Extraer el valor del atributo data-id
            var modal = $(this);
            modal.find('#id_empresa').val(idempresa); // Asignar el valor al campo oculto id_empresa
        });
    });
</script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Función para validar el campo nombre en tiempo real
            var nombreInput = document.getElementById('nombreEmpresa');
            var montoRegex = /^\d+$/;

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
            var rutInput = document.getElementById('rut');

            rutInput.addEventListener('input', function() {
                var rut = this.value.trim();
                var rutHelp = document.getElementById('rutHelp');
                if (!montoRegex.test(rut)) {
                    rutHelp.innerText = 'El RUT solo puede ser números.';
                }else if (rut == "") {
                    rutHelp.innerText = 'El RUT no puede estar vacio.';
                } else {
                    rutHelp.innerText = '';
                }
            });
        });
    </script>

@endsection
