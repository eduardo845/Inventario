<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class KardexController extends Controller
{
    public function kardex(){
        $kardex= App\Kardex::all();
        return view('auth.kardex', compact('kardex'));
    }
   
}
