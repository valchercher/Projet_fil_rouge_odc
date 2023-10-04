<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        try{
            return DB::transaction(function () use($request){
                $session=DB::table('sessions')->create([
                    "date"=>$request->date,
                    "heure_debut"=>$request->heure_debut,
                    "heure_fin"=>$request->heure_fin,
                    "salle_id"=>$request->sale_id,
                    "valider_session"=>$request->valider_session,
                    "demande_annuler"=>$request->demande_annuler,
                ]);
                $session->coursclassesessions()->attach($request->cours_classes);
            });

        }catch(Trowable $e){
            report($e);
            return false;
        }
    }
}
