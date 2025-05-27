<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PrestasiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/user', function (Request $request) {
//     return "ok";
// });
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('/Alumni', AlumniController::class);
Route::apiResource('/Prestasi', PrestasiController::class);
Route::apiResource('/Karir', KarirController::class);
