<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Cours;

class Enseignant extends Model
{

    use HasFactory,HasApiTokens;
    public $timestamps=false;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'teleN',
        'ratings',
        'role',
        'image',
        'birthday'
    ];
    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
