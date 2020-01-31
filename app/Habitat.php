<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    protected $fillable = ['nome_habitat','caracteristicas_habitat'];
    protected $guarded = ['id','created_at','updated_at'];
    protected $table = 'habitats';
}
