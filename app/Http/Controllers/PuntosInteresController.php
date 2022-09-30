<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntosInteresController extends Controller
{
    public function ListarPuntosDeInteresPorNombre(Request $request, $Nombre)
    {
        $puntosPorNombre = DB::table('puntosinteres')->where('nombre', 'like', '%' . $Nombre . '%')->paginate(12);
        return response()->json($puntosPorNombre);
    }

    public function ListarPuntosDeInteresPorNombreCercanos(Request $request, $Nombre)
    {
        $latpunto = $request->lat;
        $longpunto = $request->long;

        $puntosPorNombre = DB::table('puntosinteres')
        ->where('nombre', 'like', '%' . $Nombre . '%')
        ->whereBetween('Latitud', [$latpunto + 500, $latpunto - 500], 'AND', 'Longitud',[$longpunto + 500, $longpunto - 500])
        ->paginate(12);
        
        // return response()->json(gettype($puntosPorNombre));
        return response()->json($puntosPorNombre);
    }



    public function ListarPuntosDeInteresPorCategoria(Request $request, $Categoria)
    {
        if ($Categoria === 'Servicios Esenciales') {
            $tabla = 'servicios_esenciales';
        }

        if ($Categoria === 'Espectaculos') {
            $tabla = 'espectaculos';
        }

        $puntosPorCategoria = DB::table('puntosinteres')->Join($tabla, 'puntosinteres.id', '=', 'puntosinteres_id')->orderBy('Tipo')->paginate(12);
        return response()->json($puntosPorCategoria);

    }

}
