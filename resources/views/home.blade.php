@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Este es tu servicio de socio!<br> Acá puedes reservar con anticipación todos los servicios que te ofrece el club, y también seleccionar si va a ser Académico, lo que incluiria alguien de nuestro personal para que te acompañe y te instruya en la actividad, o si es solamente recreativo.
                    También puedes ver si estas al día en tu mensualidad.
                    Disfruta.<br> Att Nosotros.<br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
