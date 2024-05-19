<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table = 'profesors';

    protected $fillable = ['nombre', 'DNI', 'edad', 'email'];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}

=======
<<<<<<<< HEAD:app/Models/Alumno.php

    protected $fillable = ['nombre', 'DNI', 'edad', 'email'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
========
    public function alumnos(){
        return $this->hasMany(Alumno::class);
>>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f:app/Models/Profesor.php
    }
}
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
