<?php
use Illuminate\Support\Facades\Request;
namespace App\Http\Controllers;
use App;
use App\especifico;
use Illuminate\Http\Request;
use App\Http\Controllers\Nuevo;

class NuevoController extends Controller
{
    //
    public function nuevo(){
        $nuevo= App\Nuevo::all();
       /*    Nuevo::create([
            'nombre'=>Request::input('nombre'),
            'descripcion'=>Request::input('descripcion'),]);*/
            return view('auth.nuevoRegistro', compact('nuevo'));
    }

    

}
