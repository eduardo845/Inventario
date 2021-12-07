@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')

@section('texto')
 
   
@endsection

@section('img-logo')
<img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">

@endsection

@section('salir')
<button type="button" class="btn-salir">Salir</button>

@endsection
    
   
    <div class="nuevo">
 
       <span class="new-registro">Registro de Nuevo Producto</span>
       <h4>Seleccione la información solicitada para el ingreso de un nuevo producto</h4>

        
    </div>
        
   
@endsection

