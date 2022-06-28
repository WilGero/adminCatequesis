<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catechism extends Model
{
    use HasFactory;
    public function catechumens(){
        return $this->belongsToMany('App\Models\Catechumen');
    }
}
