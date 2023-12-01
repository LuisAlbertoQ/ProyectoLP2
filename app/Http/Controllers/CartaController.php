<?php

namespace App\Http\Controllers;

use App\Models\CartaP;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartaController extends Controller{
    public function index(){
        $cartas=CartaP::select('company_id',DB::raw('count(company_id)as value'))
        ->groupBy('company_id')->get();
        return response()->json($cartas);
    }

    public function store(Request $request){

        $carta=CartaP::create($request->all());
        return response()->json([
            'message'=>"Registro insertado cerrectamente",
            'carta'=>$carta
        ],200);
    }

    public function update(Request $request, CartaP $carta){
        $carta->update($request->all());
        return response()->json([
            'message' => 'Registro editado correctamente',
            'carta' => $carta
        ], 200);
    }

    public function destroy(CartaP $carta){
        $carta->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente",
            'carta'=>$carta
        ],200);
    }

    public function show($cartas) {
        $cartas = CartaP::find($cartas);
        if ($cartas) {
            return response()->json($cartas);
        } else {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }
    }
}
