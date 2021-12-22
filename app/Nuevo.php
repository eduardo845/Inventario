<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;


class Nuevo extends Model
{
    protected $table='cuenta_contable';

    protected $table2='nuevo_registro';
    protected $fillable = ['nombre', 'descripcion','codigo','especifico','cuenta_contable','unidad_medida','cantidad_existencia'];

   

    
}
