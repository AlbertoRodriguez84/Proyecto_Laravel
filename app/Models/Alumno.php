<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'DNI', 'edad', 'email'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }
}
