@extends('layout')

@section('title', 'Ingreso')

@section('styles')
<style>
    .registro {
        background-color: #ffffff;
        color: #000000;
        padding-top: 50px;
      }
      .container3{
        display: flex;
        flex-wrap: wrap;
      }
      .item{
        flex-grow: 1;
        flex-basis: 200;

      }
      .container1 {
        height: 10%;
        width: 95%;
        background-color: #002024;
        border-radius: 10px;
        color: #ffffff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      }
      .form-control {
        background-color: #333;
        color: #fff;
        border: 1px solid #444;
      }

      .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
      }
      .btn-primary:hover {
        background-color: #218838;
        border-color: #218838;
      }
      .btn-link {
        color: #ffd700;
      }
      #confirmModal {
        margin-left: 0;
        color: #ffffff;
      }
      .modal-content {
        width: 700px;
        background-color: #002024;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
      }
      .close {
        color: #ffffff;
      }
      h2 {
        color: #ffffff;
      }
      .invalid-feedback {
        color: #dc3545;
      }
</style>
@endsection

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


      <div class="registro">
        <div class="container-fluid">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-6 mt-5">
                <div id="formContainer" class="container1 mt-5">
                  <h2 class="text-center">Ingresar</h2>
                  <form action="/login" id="formLogin" method="POST">
                      @csrf
                      <div class="form-group">
                          <label for="email">Correo electrónico:</label>
                          <input type="email" class="form-control" id="correo" name="correo" />
                          @error('correo')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="password">Contraseña:</label>
                          <input type="password" class="form-control" id="password" name="password" />
                          @error('password')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                  </form>
                  <p class="text-center">
                ¿No tienes una cuenta?
                <button
                  type="button"
                  class="btn btn-link custom-button"
                  data-toggle="modal"
                  data-id="3"
                  class="btn_remove_apoderado"
                  data-target="#confirmModal"
                >
                  Registrate aquí</button
                >.
              </p>
                </div>
              </div>
            <div class="col-md-6 mt-5">
            <img src="images/imageRealistRegistro.jpeg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>

      </div>


          <br />
          <br />

          <div
            class="modal fade"
            id="confirmModal"
            tabindex="-1"
            aria-labelledby="confirmModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content justify-content-center">
                <div class="modal-header">
                  <h2 class="modal-title" id="confirmModalLabel">
                    Formulario de registro
                  </h2>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  >
                    &times;
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('registro.submit') }}" method="POST">
                      @csrf  
                      <div class="row">
                          <div class="col-sm-6 form-group row">
                              <label class="col-form-label"><b>Nombre:</b></label>
                              <div class="col-sm-12">
                                  <input class="form-control" type="text" name="nombre" required />
                                  <div id="nombreError" class="invalid-feedback"></div>
                              </div>
                          </div>
                          <div class="col-sm-6 form-group row">
                              <label class="col-form-label"><b>Correo electrónico:</b></label>
                              <div class="col-sm-12">
                                  <input type="email" class="form-control" name="email" id="email" />
                                  <div id="emailError" class="invalid-feedback"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-6 form-group row">
                              <label class="col-form-label"><b>Tipo de persona:</b></label>
                              <div class="col-sm-12">
                                  <select name="tipoPersona" class="form-control" id="tipoPersona" required onchange="showHideDocumento()">
                                      <option value="" class="disabled">Seleccione</option>
                                      <option value="1">Persona natural</option>
                                      <option value="2">Persona jurídica</option>
                                  </select>
                                  <div id="tipoPersonaError" class="invalid-feedback"></div>
                              </div>
                          </div>
                          <div class="col-sm-6 form-group row" id="tipoDocumentoDiv">
                              <label class="col-form-label"><b>Tipo de documento:</b></label>
                              <div class="col-sm-12">
                                  <select name="tipoId" class="form-control" id="tipoId" required>
                                      <option value="" class="disabled">Seleccione</option>
                                  </select>
                                  <div id="tipoIdError" class="invalid-feedback"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-6 form-group row">
                              <label class="col-form-label"><b>Numero de identificación:</b></label>
                              <div class="col-sm-12">
                                  <input class="form-control" type="text" name="numeroId" id="numeroId" required/>
                                  <div id="numeroIdError" class="invalid-feedback"></div>
                              </div>
                          </div>
                          <div class="col-sm-6 form-group row" >
                              
                              <label class="col-form-label">Con qué perfil te registrarás?:</label>
                              <div class="col-sm-12">
                                  <select name="perfil" class="form-control" id="perfil" required onchange="showHideEmpresaFields()">
                                      <option value="" class="disabled">Seleccione</option>
                                      <option value="1">Emprendedor</option>
                                      <option value="2">Micro empresa</option>
                                      <option value="3">Mediana empresa</option>
                                  </select>
                                  <div id="perfilError" class="invalid-feedback"></div>
                              </div>
                          </div>
                      </div>
                      <br>
                      <div class="row" id="empresaFields" style="display: none;">
                        <h6 class="col-form-label " style="color: #28a745;"><b>Información de la empresa:</b></h6>
                        <br>
                        <div class="col-sm-6 form-group row" >
                          <label class="col-form-label"><b>Nombre de la empresa:</b></label>
                          <div class="col-sm-12">
                              <input class="form-control" type="text" name="nombreEmpresa" id="nombreEmpresa" placeholder="Nombre de la empresa" />
                          </div>
                        </div>
                        <div class="col-sm-6 form-group row">
                          <label class="col-form-label"><b>RUT de la empresa:</b></label>
                          <div class="col-sm-12">
                              <input class="form-control" type="text" name="rut" id="rut" placeholder="RUT de la empresa" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-12 form-group row">
                              <label class="col-form-label"><b>Contraseña:</b></label>
                              <div class="col-sm-12">
                                  <input class="form-control" type="password" name="contrasena" id="contrasena" required />
                                  <div id="contrasenaError" class="invalid-feedback"></div>
                              </div>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary">Registrarse</button>
                          </div>
                      </div>
                  </form>
                </div>

                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-default btn-sm"
                    data-dismiss="modal"
                  >
                    Cancelar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      @include('administracion.component.testimonio')

      <div id="fh5co-blog">
        <div class="container">
        @include('eventos.component.eventoVirtual')
        </div>
      </div>

      <aside id="fh5co-hero">
        <div class="flexslider">
          <ul class="slides">
            <li
              style="
                background-image: url(images/La-mejor-forma-de-invertir.jpg);
              "
            >
              <div class="overlay-gradient"></div>
            </li>
            <li style="background-image: url(images/inversion.png)">
              <div class="overlay-gradient"></div>
            </li>
            <li style="background-image: url(images/porki.jpg)">
              <div class="overlay-gradient"></div>
            </li>
          </ul>
        </div>
      </aside>
@endsection

@section('scripts')
<script>
    // Obtener el elemento select
  var select = document.getElementById("tipoId");

  // Crear opciones nuevas
  var option1 = document.createElement("option");
  option1.text = "NIT";
  option1.value = "4";

  var option2 = document.createElement("option");
  option2.text = "Cedula de ciudadanía";
  option2.value = "1";
  var option3 = document.createElement("option");
  option3.text = "Cédula de extranjería";
  option3.value = "2";


  function showHideDocumento() {
    var tipoPersona = document.getElementById('tipoPersona');
    var tipoDocumentoDiv = document.getElementById('tipoDocumentoDiv');

    // Remover todas las opciones existentes
    select.innerHTML = '';

    if (tipoPersona.value == '2') { // Persona jurídica
        // Agregar la opción preseleccionada
        select.appendChild(option1);
    } else {
        // Agregar la otra opción
        select.add(option2);
        select.add(option3);
    }
  }
  function showHideEmpresaFields() {
    var perfil = document.getElementById('perfil');
    var empresaFields = document.getElementById('empresaFields');

    if (perfil.value != '1') { // No es emprendedor
        empresaFields.style.display = 'block';
    } else {
        empresaFields.style.display = 'none';
    }
  }

</script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('form');
        var nombreInput = document.getElementsByName('nombre')[0];
        var correoInput = document.getElementsByName('email');
        var tipoIdSelect = document.getElementsByName('tipoId')[0];
        var numeroIdInput = document.getElementsByName('numeroId')[0];
        var perfilSelect = document.getElementsByName('perfil')[0];
        var passwordInput = document.getElementsByName('contrasena')[0];
        $('#email').on('input blur', function(event) {
          var input = $(this);
          var value = input.val();
          var mensajeError = $('#emailError');
          var mensaje = 'El correo electrónico es inválido.';
          validarCorreo(input[0]);
        });

       

        nombreInput.addEventListener('input', function() {
            validarNombreValue(nombreInput);
            validarNombre(nombreInput);
        });

        tipoIdSelect.addEventListener('input', function() {
            validarTipoId(tipoIdSelect);
            
        });

        numeroIdInput.addEventListener('input', function() {

            validarNumeroId(numeroIdInput);
            validarNumerId($(this).val(), numeroIdInput);
            validarRango($(this).val(), numeroIdInput);
        });

        perfilSelect.addEventListener('input', function() {
            validarPerfil(perfilSelect);
        });

        passwordInput.addEventListener('input', function() {
            validarPassword(passwordInput);
            secure(passwordInput);
        });

        form.addEventListener('submit', function(event) {
        // Verificar todas las condiciones de validación
        var esValido = true;
        if (!validarNombreValue(nombreInput)) {
            esValido = false;
        }
        if (!validarCorreo(correoInput)) {
            esValido = false;
        }
        if (!validarTipoId(tipoIdSelect)) {
            esValido = false;
        }
        if (!validarNumeroId(numeroIdInput)) {
            esValido = false;
        }
        if (!validarNumerId(numeroIdInput.value, numeroIdInput)) {
            esValido = false;
        }
        if (!validarRango(numeroIdInput.value, numeroIdInput)) {
            esValido = false;
        }
        if (!validarPerfil(perfilSelect)) {
            esValido = false;
        }
        if (!validarPassword(passwordInput)) {
            esValido = false;
        }

        // Si alguna condición no se cumple, cancelar el envío del formulario
        if (!esValido) {
            event.preventDefault();
        }
    });
        // Funciones de validación

        function validarNombre(input) {
            var regex = /^[A-Za-zÁÉÍÓÚáéíóú\s]+$/;
            var mensaje = 'El nombre es requerido y no debe contener caracteres especiales.';
            mostrarError(input, !regex.test(input.value.trim()), mensaje);
        }

        function validarNombreValue(input) {
            var mensaje = 'El nombre es requerido.';
            mostrarError(input, input.value == '', mensaje);
        }

        function validarTipoId(select) {
            var mensaje = 'Seleccione un tipo de documento.';
            mostrarError(select, select.value === '', mensaje);
        }

        function validarNumeroId(input) {
            var mensaje = 'El número de identificación es requerido.';
            mostrarError(input, input.value.trim() === '', mensaje);
        }
        function validarRango(value, input) {
            var mensaje = 'El número de identificación no debe ser mayor a 10 digitos.';
            mostrarError(input, value > 9999999999, mensaje);
        }
        function validarNumerId(value, input) {
            var mensaje = 'El valor número de identificación no es valido.';
            mostrarError(input, isNumber(value) == false, mensaje);
        }

        function validarPerfil(select) {
            var mensaje = 'Seleccione un perfil.';
            mostrarError(select, select.value == "", mensaje);
        }

        function validarPassword(input) {
          console.log(input.value.trim());
            var mensaje = 'La contraseña es requerida.';
            mostrarError(input, input.value.trim() === '', mensaje);
        }
        function secure(input){
          var contieneLetras = /[a-zA-Z]/.test(input.value);
          var contieneNumeros = /\d/.test(input.value);
          var contieneCaracteresEspeciales = /[!@#$%^&*(),.?":{}|<>]/.test(input.value);
          var longitudValida = input.value.length >= 8;

          // Verificar si la contraseña cumple con todas las reglas
          var esSegura = contieneLetras && contieneNumeros && contieneCaracteresEspeciales && longitudValida;

          // Mostrar mensaje de error si la contraseña no es segura
          mostrarError(input, !esSegura, 'La contraseña debe contener al menos 8 caracteres, incluyendo letras, números y caracteres especiales.');

          // Opcional: proporcionar retroalimentación sobre la fortaleza de la contraseña
          // Esto es solo un ejemplo y puedes ajustarlo según tus necesidades
          if (esSegura) {
              mensajeError.text('La contraseña es segura.');
              mensajeError.removeClass('text-danger').addClass('text-success');
          } else {
              mensajeError.removeClass('text-success').addClass('text-danger');
          }
        }
        function validarCorreo(input) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var mensaje = 'El correo electrónico es inválido.';
        mostrarError(input, !regex.test(input.value.trim()), mensaje);
    }

        function mostrarError(input, condicion, mensaje) {
            var errorDiv = input.nextElementSibling;
            errorDiv.innerText = condicion ? mensaje : '';
            console.log(condicion);
            input.classList.toggle('is-invalid', condicion);
        }
      });
      function isNumber(value) {
      return !isNaN(parseFloat(value)) && isFinite(value);
      }

    </script>
@endsection
