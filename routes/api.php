<?php

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

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\TestController;

// Route::apiResource("users", UserController::class); // Les routes "users.*" de l'API

Route::apiResource("test", TestController::class); // Les routes "test.*" de l'API
