@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')
   
    <div id="pantalla-dividida">
        <div class="left">
            <img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">
            <span class="usg">UNIDAD DE SERVICIOS GENERALES</span>
        </div>
        <div class="right">
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