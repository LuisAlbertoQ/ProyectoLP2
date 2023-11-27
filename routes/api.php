<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PlanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Plan
Route::get('/plans',[PlanController::class,'index']);
Route::post('/plans',[PlanController::class, 'store']);
Route::put('/plans/{plan}',[PlanController::class, 'update']);
Route::delete('/plans/{plan}',[PlanController::class, 'destroy']);
Route::get('/plans/{plan}',[PlanController::class,'show']);

//Company
Route::get('/companies',[CompanyController::class,'index']);
Route::post('/companies',[CompanyController::class, 'store']);
Route::put('/companies/{company}',[CompanyController::class, 'update']);
Route::delete('/companies/{company}',[CompanyController::class, 'destroy']);
Route::get('/companies/{company}',[CompanyController::class,'show']);
