<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cours;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Throwable;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function store(Request $request){
        try {
            return \DB::transaction(function () use($request) {
                $user=User::create([
                    "nom"=>$request->nom,
                    "prenom"=>$request->prenom,
                    "email"=>$request->email,
                    "password"=>$request->password,
                    "role"=>$request->role,
                    "specialite"=>$request->specialite,
                    "grade"=>$request->grade,
                    "date_naissance"=>$request->date_naissance,
                ]);
                return response()->json([
                    "status"=>Response::HTTP_OK,
                    "message"=>"user est créé avec succès",
                    "data"=>$user
                ]);
            });
        }
        catch(Trowable $e){
            report($e);
            return false;
        }
    }
}
