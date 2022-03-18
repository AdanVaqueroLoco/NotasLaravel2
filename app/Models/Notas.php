<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'contenido'];
    #Primero no se me guardaban los cambios de la nueva nota
    #y luego esto del model no me jaló
}
