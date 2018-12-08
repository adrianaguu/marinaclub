@extends('layouts.app')
 
 @section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selecciona lo que desees reservar</div>

                <div class="card-body">
                    @if($message)
                        <p>{{$message}}</p>
                    @endif
                    <form method="POST" action="{{route('reservaeqpsave')}}">
                    @csrf
                    <div class="row">
                        Elige:
                        <select name="sel_equip" class="custom-select">
                            @foreach($items as $item)
                                <option value= "{{ $item->id }}">{{ $item->nombre }}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="row">
                        <label for="inp-date-return">Fecha de retorno</label>
                        <input id="inp-date-return"  class="form-control" name="inp-date-return" type="date" required>
                    </div>
                    <div class="row">
                        <label for="inp-cantidad">Ingrese Cantidad</label>
                        <input id="inp-cantidad"  class="form-control" value="1" name="inp-cantidad" type="number" required>
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Reservar</button>
                    </div>
                    </form>
                 </div>   
            </div>
        </div>
    </div>
</div>
 @endsection