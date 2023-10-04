<?php

namespace App\Models;

use App\Models\Cours;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;
    public function cours()
    {
        return $this->belongsToMany(Cours::class,'cours_classes');
    }
}
