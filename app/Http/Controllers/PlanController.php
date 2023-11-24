<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller{

    public function index(){
        $plans=Plan::all();
        return response()->json($plans);
    }

    public function store(Request $request){

        $plan=Plan::create($request->all());
        return response()->json([
            'message'=>"Registro insertado cerrectamente",
            'plan'=>$plan
        ],200);
    }

    public function update(Request $request, Plan $plan){
        $plan->update($request->all());
        return response()->json([
            'message' => 'Registro editado correctamente',
            'plan' => $plan
        ], 200);
    }

    public function destroy(Plan $plan){
        $plan->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente",
            'plan'=>$plan
        ],200);
    }

    public function show($plans) {
        $plans = Plan::find($plans);
        if ($plans) {
            return response()->json($plans);
        } else {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }
    }
    
}
