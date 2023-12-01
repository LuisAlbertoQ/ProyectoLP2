<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function coordinators(){
        return $this->hasMany(Coordinator::class);

    }
}
