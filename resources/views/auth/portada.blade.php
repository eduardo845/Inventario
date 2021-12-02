@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

   
    <div id="pantalla-dividida">
       
                <div class="top-left">
                    <img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">
                </div>
                <div class="top-right">
                    <button type="button" class="btn-salir">Salir</button>
                </div>  
    </div>

    
    <table class="portada">
        <th class="relleno"></th>
    </table>

    
        
   
@endsection