@extends('adminLayout')

@section('title', 'Administración')

@section('styles')

@endsection

@section('content')
    <div class="header">
        <div class="row" id="slideLogin">
        <div class="overlay">
        <h2>Hola, {{session('user')->nombre}} !</h2>
            <p>Aca encontraras tus datos.</p>
        </div>
        <img src="{{ asset('images/rascacielos.jpg') }}"  alt="" srcset="">

    </div>
    </div>
    <div class="row">
    <table class="tableUsuario table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo documento</th>
            <th scope="col">Nùmero documento</th>
            <th scope="col">Tù perfil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ session('user')->id }}</th>
                <td>{{ session('user')->nombre }}</td>
                <td>{{ session('user')->correo }}</td>
                <td>
                    @if(session('user')->tipo_id == 1)
                    Cedula de ciudadanía
                    @elseif(session('user')->tipo_id == 2)
                    Cédula de extranjería
                    @elseif(session('user')->tipo_id == 3)
                    Pasaporte
                    @else
                    - -
                    @endif
                </td>
                <td>{{ session('user')->numero_id }}</td>
                <td>
                    @if(session('user')->perfil == 1)
                    Emprendedor
                    @elseif(session('user')->perfil == 2)
                    Inversor
                    @else
                    - -
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    
@endsection
@section('scripts')
    <!-- Aquí puedes incluir scripts específicos para esta página -->
@endsection
