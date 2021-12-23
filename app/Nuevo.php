<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\cuenta;


class Nuevo extends Model
{
    
    
    protected $table='nuevos';
    protected $fillable = ['nombre', 'descripcion','codigo','especifico','cuenta_contable','unidad_medida','cantidad_existencia'];

    public function cuenta(){
        return $this->belongsTo(cuenta::class,'codigo','id');
    }
}


