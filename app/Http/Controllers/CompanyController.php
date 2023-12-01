<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller{
    public function index(){
        $companies=Company::all();
        return response()->json($companies);
    }

    public function store(Request $request){

        $company=Company::create($request->all());
        return response()->json([
            'message'=>"Registro insertado cerrectamente",
            'company'=>$company
        ],200);
    }

    public function update(Request $request, Company $company){
        $company->update($request->all());
        return response()->json([
            'message' => 'Registro editado correctamente',
            'company' => $company
        ], 200);
    }

    public function destroy(Company $company){
        $company->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente",
            'company'=>$company
        ],200);
    }

    public function show($companies) {
        $companies = Company::find($companies);
        if ($companies) {
            return response()->json($companies);
        } else {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }
    }
}
