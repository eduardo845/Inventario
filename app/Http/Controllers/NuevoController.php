<?php

namespace App\Http\Controllers;
use App;
use App\especifico;
use Illuminate\Http\Request;

class NuevoController extends Controller
{
    //
    public function nuevo(){
        $nuevo= App\Nuevo::all();
        return view('auth.nuevoRegistro', compact('nuevo'));
    }


}
