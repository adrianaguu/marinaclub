@extends('layouts.app')
 
 @section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuestras Areas</div>

                <div class="card-body">
                    
                
                    @foreach($aitems as $aitem)
                     <li>{{ $aitem->nombre }}</li>
                    @endforeach 
                    
                 </div>   
            </div>
        </div>
    </div>
</div>
 @endsection