<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\ModuleUser;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Throwable;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CoursController extends Controller
{
    public function store(Request $request)
    {
       try {
        return DB::transaction(function () use($request) {
            $module_user=ModuleUser::create([
                "module_id"=>$request->module_id,
                "user_id"=>$request->user_id,
            ]);
            $cours=Cours::create([
                "nb_heure_global"=>$request->nb_heure_global,
                "semestre_id"=>$request->semestre_id,
                "annee_id"=>$request->annee_id,
                "module_user_id"=>$module_user->id,
            ]);
            $cours->classes()->attach($request->classes);
            return response()->json([
                "status"=>Response::HTTP_OK,
                "message"=>"cours ajouter avec succès",
                "data"=>$cours
            ]);
        });
       }
       catch (Throwable $e) {
        report($e);
 
        return false;
    }
       
    }
}
