@extends('layouts.app')
 
 @section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuestras Areas</div>

                <div class="card-body">
                    
                    Lista de Servicios:
                
                    @foreach($sitems as $sitem)
                     <li>Servicio: {{ $sitem->servicioNombre}}</li>
                     <li>Area: {{ $sitem->areaNombre}}</li>
                    @endforeach 
                    Lista de equipamientos:
                    @foreach($eitems as $eitem)
                     <li>{{ $eitem->eqpNombre }}</li>
                    @endforeach 
                    
                 </div>   
            </div>
        </div>
    </div>
</div>
 @endsection