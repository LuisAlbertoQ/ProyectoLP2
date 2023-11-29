<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model{

    use HasFactory;
    protected $guarded=['id'];

    public function plan_p_p_p_s(){
        return $this->hasMany(Plan::class);

    }

    public function cartas(){
        return $this->hasMany(CartaP::class);
    }
    public function convocatorys(){
        return $this->hasMany(Convocatory::class);
    }
}
