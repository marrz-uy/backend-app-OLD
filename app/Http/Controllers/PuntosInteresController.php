<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntosInteresController extends Controller
{
    //**LISTAR PUNTOS DE INTERES POR NOMBRE**
    public function ListarPuntosDeInteresPorNombre(Request $request, $Nombre)
    {
        //TODO poder ver resultados de ambas consultas paginados en una si nombre de ambas son similares
        $puntosPorNombre = DB::table('puntosinteres')
            ->where('nombre', 'like', '%' . $Nombre . '%')->paginate(12);

        $eventosPorNombre = DB::table('eventos')
            ->where('nombre', 'like', '%' . $Nombre . '%')
            ->orWhere('tipo', 'like', '%' . $Nombre . '%')
            ->paginate(12);

        if ($puntosPorNombre == '') {

            return response()->json($eventosPorNombre);
        } else {
            return response()->json($puntosPorNombre);
        }

    }

    //**LISTAR PUNTOS DE INTERES POR NOMBRE con DISTANCIA**
    public function ListarPuntosDeInteresPorNombreCercanos(Request $request, $Nombre)
    {

        // VALORES RECIBIDOS
        $latpunto  = $request->latitudAEnviar;
        $longpunto = $request->longitudAEnviar;
        $distancia = $request->distanciaAEnviar;
        // LATITUD
        $latMIN = $latpunto - ($distancia);
        $latMAX = $latpunto + ($distancia);
        // LONGITUD
        $longMIN = $longpunto - ($distancia);
        $longMAX = $longpunto + ($distancia);

        // WERE-WEREBETWEEN FUNCIONANDO BIEN
        $puntosPorNombre = DB::table('puntosinteres')
            ->where('nombre', 'like', '%' . $Nombre . '%')
            // ->whereBetween('Latitud', [$latMIN, $latMAX])
            // ->whereBetween('Longitud', [$longMIN, $longMAX])
            ->paginate(12);

        $eventosPorNombre = DB::table('eventos')
            ->where('nombre', 'like', '%' . $Nombre . '%')
            ->orWhere('tipo', 'like', '%' . $Nombre . '%')
            ->paginate(12);

        if ($puntosPorNombre == '') {
            return response()->json($eventosPorNombre);
        } else {
            return response()->json($puntosPorNombre);
        }
    }

    //**LISTAR PUNTOS DE INTERES POR CATEGORIA**
    public function ListarPuntosDeInteresPorCategoria(Request $request, $Categoria)
    {
        if ($Categoria === 'Servicios Esenciales') {
            $tabla = 'servicios_esenciales';
        }

        if ($Categoria === 'Espectaculos') {
            $tabla = 'espectaculos';
        }

        $puntosPorCategoria = DB::table('puntosinteres')
            ->Join($tabla, 'puntosinteres.id', '=', 'puntosinteres_id')->orderBy('Tipo')->paginate(12);
        return response()->json($puntosPorCategoria);

    }

}
