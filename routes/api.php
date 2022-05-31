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
use App\Http\Controllers\CaItemController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\MotivationController;
use App\Http\Controllers\ComplementaireController;
use App\Http\Controllers\DeterminationController;
use App\Http\Controllers\ViabiliteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EchelleController;
use App\Http\Controllers\EstimationController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ConcurrentController;
use App\Http\Controllers\ImplantationController;
use App\Http\Controllers\EstimationClientController;
use App\Http\Controllers\EstimationConcurrentController;
use App\Http\Controllers\EstimationFournisseurController;
use App\Http\Controllers\InfoProjetController;
use App\Http\Controllers\PlanFinancementController;
use App\Http\Controllers\ProgrammeInvestissementController;
use App\Http\Controllers\ChiffreAffaireController;
use App\Http\Controllers\ExportController;
use App\Models\Client;
use App\Models\Concurrent;
use App\Models\Fournisseur;

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
    //solution filters 
    Route::get('/solution_filters',[SolutionController::class,'filters']);
    //Potentiel filters
    Route::get('/potentiel_filters',[PotentielController::class,'filters']);
    //Viabilite filters
    Route::get('/viabilite_filters',[ViabiliteController::class,'filters']);
    //projets crud
    Route::get('/projets',[ProjetController::class,'index']);
    Route::post('/create_projet',[ProjetController::class,'store']);

    Route::get('users', [AuthController::class, 'index']);
    //associe filters
    Route::get('/associe_filters',[AssocieController::class,'filters']);
    //associe crud
    Route::post('/create_associe',[AssocieController::class,'store']);


     //potentiel crud
     Route::get('/potentiels',[PotentielController::class,'index']);
     Route::post('/create_potentiel',[PotentielController::class,'store']);
     
      //motivations crud
      Route::get('/motivations',[MotivationController::class,'index']);
      Route::post('/create_motivation',[MotivationController::class,'store']);

      //determinations crud
      Route::get('/determinations',[DeterminationController::class,'index']);
      Route::post('/create_determination',[DeterminationController::class,'store']);

      //complementaires crud
      Route::get('/complementaires',[ComplementaireController::class,'index']);
      Route::post('/create_complementaire',[ComplementaireController::class,'store']);
        
 
     //solution filters
     Route::get('/solution_filters1',[SolutionController::class,'filters1']);
     Route::get('/solution_filters2',[SolutionController::class,'filters2']);
     Route::get('/solution_filters3',[SolutionController::class,'filters3']);
     Route::get('/solution_filters4',[SolutionController::class,'filters4']);

     //solutions crud
     Route::get('/solution',[SolutionController::class,'index']);
     Route::post('/create_solution',[SolutionController::class,'store']);
 
     //solutions Items crud
     Route::get('/solution_item',[SolutionItemController::class,'index']);
     Route::post('/create_solution_item',[SolutionItemController::class,'store']);
     

     //faisabilites crud
     Route::get('/faisabilites',[FaisabiliteController::class,'index']);
     Route::post('/create_faisabilite',[FaisabiliteController::class,'store']);

      //originalites crud
      Route::get('/originalites',[OriginaliteController::class,'index']);
      Route::post('/create_originalite',[OriginaliteController::class,'store']);

       //marches crud
     Route::get('/marches',[MarcheController::class,'index']);
     Route::post('/create_marche',[MarcheController::class,'store']);

       //marches crud
     Route::get('/marches',[MarcheController::class,'index']);
     Route::post('/create_marche',[MarcheController::class,'store']);

     //viabilite  crud
     Route::get('/viabilites',[ViabiliteController::class,'index']);
     Route::post('/viabilite_create',[ViabiliteController::class,'store']);

     //client  crud
     Route::get('/clients',[ClientController::class,'index']);
     Route::post('/client_create',[ClientController::class,'store']);

       //estimation crud
       Route::get('/estimations',[EstimationController::class,'index']);
       Route::post('/create_estimation',[EstimationController::class,'store']);

         //echelle crud
     Route::get('/echelles',[EchelleController::class,'index']);
     Route::post('/create_echelle',[EchelleController::class,'store']);

      //fournisseur crud
      Route::get('/fournisseurs',[FournisseurController::class,'index']);
      Route::post('/create_fournisseur',[FournisseurController::class,'store']);
 
       //concurrent crud
       Route::get('/concurrents',[ConcurrentController::class,'index']);
       Route::post('/create_concurrent',[ConcurrentController::class,'store']);
     
       //implantation crud
       Route::get('/implantations',[ImplantationController::class,'index']);
       Route::post('/create_implantation',[ImplantationController::class,'store']);

        //EstimationClient crud
        Route::get('/estimationclients',[EstimationClientController::class,'index']);
        Route::post('/create_estimationclient',[EstimationClientController::class,'store']);

         //EstimationConcurrent crud
       Route::get('/estimationconcurrents',[EstimationConcurrentController::class,'index']);
       Route::post('/create_estimationconcurrent',[EstimationConcurrentController::class,'store']);

        //EstimationFournisseur crud
        Route::get('/estimationfournisseurs',[EstimationFournisseurController::class,'index']);
        Route::post('/create_estimationfournisseur',[EstimationFournisseurController::class,'store']);
     
         //InfoProjet crud
         Route::get('/infoprojets',[InfoProjetController::class,'index']);
         Route::post('/create_infoprojet',[InfoProjetController::class,'store']);


          //PlanFinancement crud
          Route::get('/planfinancements',[PlanFinancementController::class,'index']);
          Route::post('/create_planfinancement',[PlanFinancementController::class,'store']);

           //programme d'investissement crud
           Route::get('/programmeinvestissements',[ProgrammeInvestissementController::class,'index']);
           Route::post('/create_programmeinvestissement',[ProgrammeInvestissementController::class,'store']);

           //chiffreaffaire crud
           Route::get('/chiffreaffaires',[ChiffreAffaireController::class,'index']);
           Route::post('/create_chiffreaffaires',[ChiffreAffaireController::class,'store']);
            //caItem crud
            Route::get('/caItems',[CaItemController::class,'index']);
            Route::post('/create_caItem',[CaItemController::class,'store']);
            //viabilite filters
            Route::get('/filter_estim',[ViabiliteController::class,'filter_estim']);
            Route::get('/filters_estimf',[ViabiliteController::class,'filters_estimf']);
            Route::get('/filters_estimco',[ViabiliteController::class,'filters_estimco']);
            Route::get('/filter_estimcl',[ViabiliteController::class,'filter_estimcl']);
            Route::get('/filter_mode_ocuupation',[ViabiliteController::class,'filter_mode_ocuupation']);
            Route::get('/filter_echelle',[ViabiliteController::class,'filter_echelle']);
            Route::get('/viabilite_filters',[ViabiliteController::class,'filters']);

            //Show
            Route::get('/export/{id}',[ExportController::class,'show']);
            Route::get('/showprojet/{id}',[ProjetController::class,'show']);
            Route::get('/showassocies/{id}',[AssocieController::class,'show']);
            Route::get('/showsolution/{id}',[SolutionController::class,'show']);
            Route::get('/showsolutionitems/{id}',[SolutionItemController::class,'show']);
            Route::get('/showpotentiel/{id}',[PotentielController::class,'show']);
            Route::get('/showviabilite/{id}',[ViabiliteController::class,'show']);
            Route::get('/showclients/{id}',[ClientController::class,'show']);
            Route::get('/showfournisseurs/{id}',[FournisseurController::class,'show']);
            Route::get('/showconcurrents/{id}',[ConcurrentController::class,'show']);
            Route::get('/showproginvestissement/{id}',[ProgrammeInvestissementController::class,'show']);
            Route::get('/showplanfinancement/{id}',[PlanFinancementController::class,'show']);
            Route::get('/showca/{id}',[ChiffreAffaireController::class,'show']);
});