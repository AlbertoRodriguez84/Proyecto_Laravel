<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;


    protected $table = 'profesors';

    protected $fillable = ['nombre', 'DNI', 'edad', 'email'];

    public function alumnos()
    {

        return $this->hasMany(Alumno::class);
    }
}



    protected $fillable = ['nombre', 'DNI', 'edad', 'email'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);

    public function alumnos(){

        return $this->hasMany(Alumno::class);

    }
}

