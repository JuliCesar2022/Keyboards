<?php

use App\Models\CmsUsers;
use App\Models\solicitud;
use App\Models\equipos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!$asesor
|
*/


Route::view('/','keyboards')->name('keyboard');


Route::get('app',\App\Http\Controllers\historial::class )->name('app')
    ->middleware('auth');

Route::post('/savesolicitudes', function () {
    $cantidadUserByAsesor = [];
    $asesores = CmsUsers::get()->where("id_cms_privileges", "2")->toArray();

    foreach ($asesores as $asesor) {

        $cantidad = solicitud::where("advisor_id", $asesor["id"])->count();
        array_push($cantidadUserByAsesor, [
            "asesor" => $asesor["id"],
            "cantidad" => $cantidad
        ]);
    }

    function compararPorCantidad($a, $b) {
        return $a["cantidad"] - $b["cantidad"];
    }


    usort($cantidadUserByAsesor, "compararPorCantidad");

    // logica del cliente

    $user= auth()->user();

$equipo_id=null;

$boleano= request("new");

if($boleano=='false'){
    echo  'fue existente';
    $equipo_id= request()->equipo_id;

}else{
    echo 'nuevo';


    $equipo= new  equipos();
    $equipo->marca=request()->marca_dispositivo;
    $equipo->modelo=request()->modelo_equipo;
    $equipo->nombre=request()->nombre;
    $equipo->tipo=request()->tipo_dispositivo;
    $equipo->client_id= auth()->id();
    $equipo->save();

    $equipo_id= $equipo->id;

}






    $solicutud = new solicitud();

    $solicutud->tipo_servicio=request()->tipo_servicio;
    $solicutud-> client_id= auth()->id();
    $solicutud->equipo_id= $equipo_id ;
    $solicutud->problem=request()->problem;
    $solicutud->advisor_id= $cantidadUserByAsesor[0]["asesor"];



    $fecha = solicitud::where("client_id",Auth()->id() )->select("created_at")->first()->created_at;


    $ultimaFecha = new \Carbon\Carbon($fecha);

    $FechaActual = new \Illuminate\Support\Carbon();
    $FechaActual = $FechaActual->now();


    $diferenciaEnHoras = $FechaActual->diffInHours($ultimaFecha);

    if ($diferenciaEnHoras<24 && $fecha!=null) {


       //return redirect('app')->with('limite','Solo una solicitud por dia');


    }



    $solicutud-> save();

    $asesor = CmsUsers::find($cantidadUserByAsesor[0]["asesor"]);
//    dd($asesor);
    \App\Repositories\BotWhatsApp\BotWhatsApp::senMessage($asesor->tel,"Señor/a ".$asesor->name." Le informamos que se le ha asignado automáticamente una solicitud. \nRevise sus solicitudes en keyboards.tranazula.com/admin/solicitudes ");


    return redirect('app')->with('enviado', 'te contactaremos pronto');
})->middleware('auth');


Route::get('centros',\App\Http\Controllers\centros::class)->name('centro')
->middleware('auth');

Route::get('mis_equipos',\App\Http\Controllers\estadoequipos::class)->name('misequipos')
->middleware('auth')
;



Auth::routes();


