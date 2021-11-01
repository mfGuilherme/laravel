<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelcurriculo extends Model
{
    use HasFactory;
    protected $table='curriculos';
    protected $fillable=['nome','nascimento','email'];
}
