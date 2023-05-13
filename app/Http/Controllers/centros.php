<?php

namespace App\Http\Controllers;

use App\Models\centrodereparaciones;
use App\Models\User;
use Illuminate\Http\Request;

class centros extends Controller
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

        $tabla_centros= User::where("id",Auth()->id() )->pluck('pais');

        $tabla_reparacions= centrodereparaciones::where('pais',$tabla_centros)->get();




         return view('centros',compact('tabla_reparacions'));
    }
}
