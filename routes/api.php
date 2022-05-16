<?php

use App\Http\Controllers\AssocieController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ItemController;
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


     //potentiel filters
     Route::get('/potentiel_filters',[PotentielController::class,'filters']);

     //potentiel crud
     Route::get('/potentiels',[PotentielController::class,'index']);
     Route::post('/create_potentiel',[PotentielController::class,'store']);
     
 
     //solution filters
     Route::get('/solution_filters',[SolutionController::class,'filters']);

     //solutions crud
     Route::get('/solution',[SolutionController::class,'index']);
     Route::post('/create_solution',[SolutionController::class,'store']);
 
     

     //item crud
     Route::get('/items',[ItemController::class,'index']);
     Route::post('/create_items',[ItemController::class,'store']);
});

