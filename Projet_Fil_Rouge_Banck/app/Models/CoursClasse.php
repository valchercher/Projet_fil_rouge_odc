<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursClasse extends Model
{
    use HasFactory;
    protected $fillable=['module_id'];
}
