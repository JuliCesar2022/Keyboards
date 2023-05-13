@extends('layouts.nav')
@section('stylo','css/centros.css')

@section('contener')

    <div class="contentlocate">
        <div class="filtros">


        </div>
        <div class="nombres">
            <li style=""><div>Nombre del lugar</div>  <div>Numero de telefono</div> <div style="width: 300px">Direccion</div> <div>Horario de atencion</div></li>

        </div>
        <div class="locates">

            <ul>
             @foreach($tabla_reparacions as $centros_reparacion)

                <li>

                    <div >{{$centros_reparacion->centro_reparaciones}}</div>
                    <div style=""> <a href="tel:@if($centros_reparacion->pais=='colombia')+57 @endif @if($centros_reparacion->pais=='brasil') +55 @endif{{$centros_reparacion->telefono}}">
                            <ion-icon style="font-size: 1.1rem" name="call-outline"></ion-icon>
                        </a></div>
                    <div style="width: 300px;display: flex"><a style="" href="{{$centros_reparacion->busquedas}}"><ion-icon style="font-size: 1.1rem" name="location-outline"></ion-icon></a> </div>
                    <div>{{$centros_reparacion->horario_comercial}}</div>
                </li>
                    <hr color="black">
             @endforeach
            </ul>


        </div>



    </div>


@endsection
