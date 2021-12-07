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
    
   
    <div id="pantalla-div">
        <div class="left">
            
        </div>
        <div class="right">
        <span class="usg">UNIDAD DE <br><br> SERVICIOS <br><br>GENERALES</span>
            <div class="right1">
                <button type="button" class="kardex">KARDEX</button>
                <button type="button" class="registro">Registro de Datos</button>
                <button type="button" class="salida">Salidas de Productos</button>
                <button type="button" class="reporte">Reporte de Mes</button>
            </div>
            <div class="right2">
                <button type="button" class="ajuste">Ajustar Saldo</button>
                <button type="button" class="sal-usg">Salidas USG</button>
                <button type="button" class="inventario">Inventario</button>
            </div>
        </div>
    </div>
        
   
@endsection

