<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\ManagementController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ROUTES AUTH
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/datauser', [AuthController::class, 'dataUser'])->middleware('auth:sanctum');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/send-mail', [AuthController::class, 'sendEmail']);


// ROUTE AGENTS
Route::get('/agent', [AgentsController::class, 'index']);
Route::post('/agent', [AgentsController::class, 'create']);
Route::post('/agente/delete', [AgentsController::class, 'delete']);



//  ROUTE MANAGEMENT
Route::get('/management', [ManagementController::class, 'index']);
Route::post('/management', [ManagementController::class, 'create']);
