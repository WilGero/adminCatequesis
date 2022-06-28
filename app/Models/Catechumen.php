<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catechumen extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function catechisms(){
        return $this->belongsToMany('App\Models\Catechism');
    }
}
