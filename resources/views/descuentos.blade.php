@extends('layouts.app')
 
 @section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Descuentos</div>

                <div class="card-body">
                    
                
                    @foreach($aitems as $aitem)
                     <li>{{ $aitem->nombre }} {{ $aitem->porcentaje * $tipo}}% </li>
                    @endforeach 
                    
                 </div>   
            </div>
        </div>
    </div>
</div>
 @endsection