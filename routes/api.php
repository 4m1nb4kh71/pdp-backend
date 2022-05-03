<?php

use App\Http\Controllers\AssocieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjetController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:api']], function () {
    //project filters
    Route::get('/projet_filters',[ProjetController::class,'filters']);

    //projets crud
    Route::get('/projets',[ProjetController::class,'index']);
    Route::post('/create_projet',[ProjetController::class,'store']);


    //associe filters
    Route::get('/associe_filters',[AssocieController::class,'filters']);
    //associe crud
    Route::post('/create_associe',[AssocieController::class,'store']);
});
