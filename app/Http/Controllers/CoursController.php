<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;

class CoursController extends Controller
{
     //getCours
     public function getCours(){
        return response()->json(Cours::all(),200);
       }
        //getCoursById 
        public function getCoursById($id){
            $cours=Cours::find($id);
            if(is_null($cours)){
                response()->json(['message'=>'enseignant introuvable'],404);
            }
            return response()->json(Cours::find($id),200);
           }
             //add Cours
        public function addCours(Request $request){
            $cours=Cours::create($request->all());
           
            return response()->json($cours,201);
           }
           //updateCours
           public function updateCours(Request $request,$id){
            $cours=Cours::find($id);
            if(is_null($cours)){
                response()->json(['message'=>'Cours introuvable'],404);
            }
            $cours->update($request->all());
            return response()->json($cours,200);
           }
               //deleteCours
               public function deleteCours(Request $request,$id){
                $cours=Cours::find($id);
                if(is_null($cours)){
                    response()->json(['message'=>'cours introuvable'],404);
                }
                $cours->delete();
                return response()->json(['message'=>'le cours  est  supprimer'],204);
               }
           
}
