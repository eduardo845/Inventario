@extends('layouts.app', ['class' => 'login-page', 'page' => 'Home', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

<div id="pantalla-dividida">
       
       <div class="top-left">
           <img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">
       </div>
       <div class="top-med1">
          
       </div>
  
       <div class="top-right">
           <button type="button" class="btn-iniciar">Iniciar Sesión</button>
       </div>

</div>

<div class="portada">
    <br>
    <br>
    <br>
    <br>
    <br>
    <span class="port">CONTROL DE ALMACEN</span><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <span class="port1">Unidad de <br> <br>Servicios Generales</span>
</div>
    

    
        
   
@endsection