<?php

namespace App\Models;

use App\Models\CoursClasseSession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory;
    public function coursclassesessions(){
        return $this->belongsToMany(CoursClasseSession::class,'cours_classe_sessions');
    }
}
