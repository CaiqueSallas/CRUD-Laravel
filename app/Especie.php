<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $fillable = ['nome_especie','caracteristicas_especie'];
    protected $guarded = ['id','created_at','updated_at'];
    protected $table = 'especies';
}
