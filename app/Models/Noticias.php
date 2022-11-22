<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;


    public function categorias(){
        // return $this->hasMany(Categorias::class, 'id');
        // return $this->belongsToMany(Categorias::class, 'categorias','id','categoria_id');
        return $this->belongsTo(Categorias::class,'categoria_id');
    }
}
