@extends('layouts.app', ['class' => 'login-page', 'page' => 'Home', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

@section('texto')
   
@endsection

@section('img-logo')
<img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">

@endsection

@section('salir')
<button type="button" class="btn-salir">Salir</button>

@endsection

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

