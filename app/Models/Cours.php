<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'name',
        'enseignant_id',
        'etudiant_id',
        'nombre_etudiant',
        'date',
        
    ];
}
