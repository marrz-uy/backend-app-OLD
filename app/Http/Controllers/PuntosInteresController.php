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

    public function ListarPuntosDeInteresPorCategoria(Request $request, $Categoria)
    {
        if ($Categoria === 'Servicios Esenciales') {
            $tabla = 'servicios_esenciales';
        }

        if ($Categoria === 'Espectaculos') {
            $tabla = 'espectaculos';
        }

        if ($Categoria === 'Transporte') {
            $tabla = 'transporte';
        }

        $puntosPorCategoria = DB::table('puntosinteres')->Join($tabla, 'puntosinteres.id', '=', 'puntosinteres_id')->orderBy('Tipo')->paginate(12);
        return response()->json($puntosPorCategoria);

    }

}
