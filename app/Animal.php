<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['nome_animal','caracteristicas_animal','id_especie','id_habitat'];
    protected $guarded = ['id','created_at','updated_at'];
    protected $table = 'animais';
}
