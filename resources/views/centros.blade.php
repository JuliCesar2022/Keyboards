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

                    <div>{{$centros_reparacion->centro_reparaciones}}</div>
                    <div> <a href="tel:@if($centros_reparacion->pais=='colombia')+57 @endif @if($centros_reparacion->pais=='brasil') +55 @endif{{$centros_reparacion->telefono}}">
                            {{$centros_reparacion->telefono}}
                        </a></div>
                    <div style="width: 300px"><a style="color:#6B6B6B" href="{{$centros_reparacion->busquedas}}">{{$centros_reparacion->direccion}}</a> </div>
                    <div>{{$centros_reparacion->horario_comercial}}</div>
                </li>
                    <hr color="black">
             @endforeach
            </ul>


        </div>



    </div>


@endsection
