<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    public $table='transportes';
    use HasFactory;

    public function camion(){
        return $this->hasMany('App\Models\camion');
    }
}