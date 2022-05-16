<?php

use App\Http\Controllers\AssocieController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SolutionItemController;
use App\Http\Controllers\FaisabiliteController;
use App\Http\Controllers\OriginaliteController;
use App\Http\Controllers\MarcheController;
use App\Http\Controllers\PotentielController;
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
     Route::get('/solution_filters1',[SolutionController::class,'filters1']);
     Route::get('/solution_filters2',[SolutionController::class,'filters2']);
     Route::get('/solution_filters3',[SolutionController::class,'filters3']);
     Route::get('/solution_filters4',[SolutionController::class,'filters4']);

     //solutions crud
     Route::get('/solution',[SolutionController::class,'index']);
     Route::post('/create_solution',[SolutionController::class,'store']);
 
     

     //faisabilites crud
     Route::get('/faisabilites',[FaisabiliteController::class,'index']);
     Route::post('/create_faisabilite',[FaisabiliteController::class,'store']);

      //originalites crud
      Route::get('/originalites',[OriginaliteController::class,'index']);
      Route::post('/create_originalite',[OriginaliteController::class,'store']);

       //marches crud
     Route::get('/marches',[MarcheController::class,'index']);
     Route::post('/create_marche',[MarcheController::class,'store']);

     
});

