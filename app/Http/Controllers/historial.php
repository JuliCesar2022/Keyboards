<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use App\Models\solicitud;
use Illuminate\Http\Request;

class historial extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        $historialLista= solicitud::where('client_id', auth()->id());



        $fechahistorial = solicitud::where("client_id",Auth()->id() )->pluck('created_at');

        $equipo_id= equipos::where('client_id', auth()->id())->get();

       // dd($equipo_id);

        return view('app',compact('fechahistorial','equipo_id'));






    }
}
