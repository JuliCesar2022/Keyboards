<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validate extends Controller
{
    //

    public function infoUsers()
    {

        $mesg = request()->validate([
            "name" => 'required',
            "Pais" => 'required | min:1',
            "Ciudad" => 'required | min:1 ',


        ],
            [
                "name.required" => 'El campo nombre es obligatorio ',
                "Pais.required" => 'Seleccione un pais',
                "Ciudad.required" => 'Seleccione una ciudad',

            ]);

    }
}
