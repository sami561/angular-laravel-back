<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Enseignant extends Model
{

    use HasFactory,HasApiTokens;
    public $timestamps=false;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'cours_id',
        'cours_nom',
        'teleN',
        'ratings'
    ];
}
