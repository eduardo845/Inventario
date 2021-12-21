<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;


class Nuevo extends Model
{
    protected $table='cuenta_contable';
    protected $fillable = ["nombre", "descripcion","codigo","especifico","cuenta","unidad","cantidad"];

    public function store(Request $request)
    {
        

        (new Nuevo($request->input()))->saveOrFail();
        return redirect()->back()->with(["mensaje" => "Informacion guardada"]);
    }

    
}
