<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\CoursController;
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


Route::prefix('etudiant')->group(function(){
   //getEtudiant 
Route::get('/',[etudiantController::class,'getEtudiants']);
//getEtudiantById
Route::get('/{id}',[etudiantController::class,'getEtudiantById']);
//addEtudiant
Route::post('/addEtudiant',[etudiantController::class,'addEtudiant']);
//updateEtudiant
Route::put('/updateEtudiant/{id}',[etudiantController::class,'updateEtudiant']);
//deleteEtudiant
Route::delete('/deleteEtudiant/{id}',[etudiantController::class,'deleteEtudiant']);
 //login 
 Route::post('/login',[etudiantController::class,'login']);
 //addEtudiant
Route::post('/signup',[etudiantController::class,'signup']);
});
                    //Enseignant
Route::prefix('enseignant')->group(function(){
    //getEnseignant 
 Route::get('/',[EnseignantController::class,'getEnseignant']);
 //getEnseignantById
 Route::get('/{id}',[EnseignantController::class,'getEnseignantById']);
 //addEtudiant
 Route::post('/addEnseignant',[EnseignantController::class,'addEnseignant']);
 //updateEtudiant
 Route::put('/updateEnseignant/{id}',[EnseignantController::class,'updateEnseignant']);
 //deleteEtudiant
 Route::delete('/deleteEnseignant/{id}',[EnseignantController::class,'deleteEnseignant']);
  //login 
  Route::post('/login',[EnseignantController::class,'login']);
  //addEtudiant
 Route::post('/signup',[EnseignantController::class,'signup']);
 });
 //Cours
 Route::prefix('cours')->group(function(){
    //getCours 
 Route::get('/',[CoursController::class,'getCours']);
 //getCoursById
 Route::get('/{id}',[CoursController::class,'getCoursById']);
 //addCours
 Route::post('/addCours',[CoursController::class,'addCours']);
 //updateCours
 Route::put('/updateCours/{id}',[CoursController::class,'updateCours']);
 //deleteCours
 Route::delete('/deleteCours/{id}',[CoursController::class,'deleteCours']);

 });