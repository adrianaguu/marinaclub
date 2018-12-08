@extends('layouts.app')
 
 @section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mi Perfil</div>
                <div class="card-body">
                    <form method="POST" action="{{route('profileEdit')}}">
                        @csrf
                        <div class="form-group">
                            <label for="inp-name">Nombre:</label>
                            <input type="text" class="form-control" id="inp-name" name="inp-name" aria-describedby="nameHelp" value="{{$usuario->name}}">
                            <label for="inp-email">Correo:</label>
                            <input type="email" class="form-control" id="inp-email" name="inp-email" aria-describedby="emailHelp" value="{{$usuario->email}}">
                            Tipo de Socio: {{ $usuario->nombre }}
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection