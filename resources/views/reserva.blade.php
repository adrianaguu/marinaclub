@extends('layouts.app')
 
 @section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selecciona tu servicio y area</div>

                <div class="card-body">
                    @if($message)
                        <p>{{$message}}</p>
                    @endif
                    <form method="POST" action="{{route('reservasave')}}">
                    @csrf

                    Elige el servicio:
                    <select name='inp-idservicio' class="custom-select">
                    @foreach($items as $item)
                     <option  value= "{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach 
                    </select>

                    Elige el área:
                    
                    <select name='inp-idarea' class="custom-select">
                    @foreach($aitems as $aitem)
                     <option  value= "{{ $aitem->id }}">{{ $aitem->nombre }}</option>
                    @endforeach 
                    </select>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                    </form>
                 </div>   
            </div>
        </div>
    </div>
</div>
 @endsection