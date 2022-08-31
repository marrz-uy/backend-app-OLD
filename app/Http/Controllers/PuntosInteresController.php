<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuntosInteresController extends Controller
{
    public function ListarPuntosDeInteresPorNombre(Request $request, $Nombre)
    {
        $puntos = DB::table('puntosinteres')->where('nombre', 'like', '%' . $Nombre . '%')->paginate(12);
        return response()->json($puntos);
    }

    public function ListarPuntosDeInteresPorCategoria(Request $request, $Categoria)
    {
        $puntos = DB::table('puntosinteres')->where('categoria', 'like', '%' . $Categoria . '%')->orderBy('Nombre')->paginate(20);
        return response()->json($puntos);
    }

}
