<?php

namespace App\Models;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cours extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function classes()
    {
        return $this->belongsToMany(Classe::class,'cours_classes');
    }
}
