<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{

    protected $fillable = ['exercicio', 'serie','repeticao', 'carga'];
    
}
