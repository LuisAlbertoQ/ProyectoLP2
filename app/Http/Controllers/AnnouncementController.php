<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        $announcement=Announcement::all();
        return response()->json($announcement);
    }

    public function store(Request $request){

        $announcement=Announcement::create($request->all());
        return response()->json([
            'message'=>"Registro insertado correctamente",
            'announcement'=>$announcement
        ],200);
    }

    public function update(Request $request,Announcement $announcement){
        $announcement->update($request->all());
        return response()->json([
            'message'=>"Registro editado correctamente",
            'announcement'=>$announcement
        ],200);
    }

    public function destroy(Announcement $announcement){
        $announcement->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],200);
    }

    public function show(Announcement $announcement){
        return response()->json($announcement);
    }
}

