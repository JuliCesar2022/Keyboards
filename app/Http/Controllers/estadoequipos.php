<?php

namespace App\Http\Controllers;

use App\Models\equipos;
use App\Models\Servicio;
use Illuminate\Http\Request;

class estadoequipos extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {


        $servicios = Servicio::where('servicio.client_id', auth()->id())
            ->join('cms_users', 'servicio.tecnico_id', '=', 'cms_users.id')
            ->join('equipos', 'servicio.equipo_id', '=', 'equipos.id')
            ->select("servicio.*","servicio.status as estado_servicio","cms_users.*","cms_users.status as estato_tecnico","equipos.*")
            ->get();

        $equipo= equipos::where('client_id',auth()->id())->get();








        return view('equiposestados',compact('equipo',"servicios"));
    }
}
