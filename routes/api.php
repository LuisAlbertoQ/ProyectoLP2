<?php

use App\Http\Controllers\AnnouncementController;
use App\Models\Announcement;
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

Route::get('/plans',[PlanController::class,'index']);
Route::post('/plans',[PlanController::class, 'store']);
Route::put('/plans/{plan}',[PlanController::class, 'update']);
Route::delete('/plans/{plan}',[PlanController::class, 'destroy']);
Route::get('/plans/{plan}',[PlanController::class,'show']);

Route::get('/announcements',[AnnouncementController::class,'index']);
Route::post('/announcements',[AnnouncementController::class, 'store']);
Route::put('/announcements/{announcement}',[AnnouncementController::class, 'update']);
Route::delete('/announcements/{announcement}',[AnnouncementController::class, 'destroy']);
Route::get('/announcements/{announcement}',[AnnouncementController::class,'show']);
