<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent;
use App;
use App\codigo;
use App\Nuevo;
use Illuminate\Http\Request;
use App\especifico;
use App\cuenta;
use App\unidadMedida;


class NuevoController extends Controller
{
    //

    public function nuevo(){
            $nuevo= Nuevo::all();
            $especificos= especifico::all();
            $codigos=codigo::all();
            $cuentas=cuenta::all();
            $medidas=unidadMedida::all();
            $pageSlug="Nuevo";
            return view('auth.nuevoRegistro', compact('nuevo','pageSlug','especificos','codigos','medidas','cuentas'));
    }

    public function especifico(){
        $nuevo=App\Nuevo::all();
 
        $pageSlug="Nuevo";
        return view('auth.nuevoRegistro', compact('nuevo','pageSlug'));
}

    public function storeg(Request $request){
        /*$registro=App\Nuevo::create([
        'nombre'=>$request['nombre'],
        'decripcion'=>$request['descripcion'],
        'codigo'=>$request['codigo'],
        'especifico'=>$request['especifico'],
        'cuenta_contable'=>$request['cuenta_contable'],
        'unidad_medida'=>$request['unidad_medida'],
        'cantidad_existencia'=>$request['cantidad_existencia'],]);*/
        $registro = new Nuevo();
        $registro->nombre = $request['nombre'];
        $registro->cuenta->associate($request['codigo']);
        $registro->save();
        return "Información Guardada 2";
        //Nuevo::create($request->all());
    }

    public function storege(Request $request){
        $this->validate($request,['nombre'=>'required','descripcion'=>'required','cantidad_existencia'=>'required',]);

    }

    public function store(Request $request){
        Nuevo::create($request->all());
        
        return "Información Guardada ";
    }

    
    

}


