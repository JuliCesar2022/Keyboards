@extends('layouts.nav')
@section('stylo','css/equipos.css')

@section('contener')



    <div class="contienetodo">

        <div class="servicios">
            <div class="menu">
                <a href="#"  class="nav-link contenido1" onclick="mostrarContenido('contenido1')"> activos</a>
                <a href="#" class="nav-link contenido1" onclick="mostrarContenido('contenido2')"> finalizados </a>
                <a href="#" class="nav-link contenido1" onclick="mostrarContenido('contenido3')"> cancelados</a>
                <a href="#" class="nav-link contenido1" onclick="mostrarContenido('contenido4')"> mis equipos</a>


            </div>

            <div id="contenido" >
                <div id="contenido1" class="contenido">
                    <li style="color: black">
                        <div>Marca</div>
                        <div>Modelo</div>
                        <div>Estado</div>
                        <div class="tecnico">Contacta a tu tecnico</div>
                        <div>Detalles</div>
                    </li>
                    <hr>
                    @foreach($servicios as $servicio)

                        @if($servicio->estado_servicio!="finalizado" && $servicio->estado_servicio!="cancelado" )



                                <li>
                                    <div>
                                        @if($servicio->marca==null)
                                            No recivido

                                        @endif

                                        @if($servicio->marca!=null)
                                            {{$servicio->marca}}

                                        @endif


                                    </div>
                                    <div>

                                        @if($servicio->modelo==null)
                                            No recivido

                                        @endif

                                        @if($servicio->modelo!=null)
                                            {{$servicio->modelo}}

                                        @endif


                                    </div>
                                    <div>
                                        @if($servicio->estado_servicio==null)
                                            No recivido

                                        @endif

                                        @if($servicio->status!=null)
                                            {{$servicio->estado_servicio}}

                                        @endif

                                    </div>
                                    <div class="tecnico"><a href="mailto:{{\App\Models\CmsUsers::where('id',$servicio->tecnico_id)->pluck('email')[0]}}"><ion-icon name="mail-outline"></ion-icon></a>
                                        <a href="tel:{{\App\Models\CmsUsers::where('id',$servicio->tecnico_id)->pluck('tel')[0]}}  "><ion-icon name="call-outline"></ion-icon></a>
                                        <a href=""><ion-icon name="information-circle-outline"></ion-icon></a>
                                    </div>

                                    <div><ion-icon style="font-size: 1.5rem" name="ellipsis-horizontal-outline"></ion-icon></div>
                                </li>
                                <hr>


                        @endif


                    @endforeach




                </div>
                <div id="contenido2" class="contenido">
                    <li style="color: black">
                        <div>Marca</div>
                        <div>Modelo</div>
                        <div>Estado</div>
                        <div class="tecnico">Contacta a tu tecnico</div>
                        <div>Mas</div>

                    </li>
                    <hr>

                    @foreach($servicios as $servicio)

                        @if($servicio->estado_servicio=='finalizado' )



                            <li>
                                <div>
                                    @if($servicio->marca==null)
                                        No recivido

                                    @endif

                                    @if($servicio->marca!=null)
                                        {{$servicio->marca}}

                                    @endif


                                </div>
                                <div>

                                    @if($servicio->modelo==null)
                                        No recivido

                                    @endif

                                    @if($servicio->modelo!=null)
                                        {{$servicio->modelo}}

                                    @endif


                                </div>
                                <div>
                                    @if($servicio->estado_servicio==null)
                                        No recivido

                                    @endif

                                    @if($servicio->status!=null)
                                        {{$servicio->estado_servicio}}

                                    @endif

                                </div>
                                <div class="tecnico"><a href="mailto:{{$servicio->email}}"><ion-icon name="mail-outline"></ion-icon></a>
                                    <a href="tel:+33{{$servicio->tel}}"><ion-icon name="call-outline"></ion-icon></a>
                                    <a href=""><ion-icon name="information-circle-outline"></ion-icon></a>
                                </div>

                                <div><ion-icon style="font-size: 1.5rem" name="ellipsis-horizontal-outline"></ion-icon></div>
                            </li>
                            <hr>


                        @endif


                    @endforeach
                </div>
                <div id="contenido3" class="contenido">
                    <li style="color: black">
                        <div>Marca</div>
                        <div>Modelo</div>
                        <div>Estado</div>
                        <div class="tecnico">Contacta a tu tecnico</div>
                        <div>Mas</div>
                    </li>
                    <hr>
                    @foreach($servicios as $servicio)

                        @if($servicio->estado_servicio=='cancelado' )



                            <li>
                                <div>
                                    @if($servicio->marca==null)
                                        No recivido

                                    @endif

                                    @if($servicio->marca!=null)
                                        {{$servicio->marca}}

                                    @endif


                                </div>
                                <div>

                                    @if($servicio->modelo==null)
                                        No recivido

                                    @endif

                                    @if($servicio->modelo!=null)
                                        {{$servicio->modelo}}

                                    @endif


                                </div>
                                <div>
                                    @if($servicio->estado_servicio==null)
                                        No recivido

                                    @endif

                                    @if($servicio->status!=null)
                                        {{$servicio->estado_servicio}}

                                    @endif

                                </div>
                                <div class="tecnico"><a href="mailto:{{$servicio->email}}"><ion-icon name="mail-outline"></ion-icon></a>
                                    <a href="tel:+33{{$servicio->tel}}"><ion-icon name="call-outline"></ion-icon></a>
                                    <a href=""><ion-icon name="information-circle-outline"></ion-icon></a>
                                </div>

                                <div><ion-icon style="font-size: 1.5rem" name="ellipsis-horizontal-outline"></ion-icon></div>
                            </li>
                            <hr>


                        @endif


                    @endforeach
                </div>

                <div id="contenido4" class="contenido">
                    @foreach($equipo as $equipos)

                        <li class="equipoList">
                            <div>{{$equipos->nombre}}</div>
                            <div>{{$equipos->marca}}</div>
                            <div>{{$equipos->modelo}}</div>
                            <div>{{}}</div>
                        </li>

                    @endforeach
                </div>
            </div>
        </div>


    </div>



@endsection
