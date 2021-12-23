@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')


    
   
    <div class="nuevo">
        
       <span class="new-registro">Solicitud de Pedido</span><br>
       <span class="letra">Ingrese la información requerida para procesar su solicitud</span><br><br>
      
        
    </div>
    <div class="nuevo1">
        <div class="nuevo1-left">
            <span class="letra">Centro de Responsabilidad:</span><br>
            <span class="letra"> Nombre del Solicitante:</span><br>
            <span class="letra">Producto a Solicitar:</span><br>
            <span class="letra">Cantidad:</span><br>
            <span class="letra">Razón de Solicitud:</span><br>
           

        </div>
        <div class="nuevo1-right">
            <select name="select" class="lista">
                <option value="value1"></option>
                <option value="value2">Value 2</option>
                <option value="value3">Value 3</option>
            </select><br>
            <input type="text" class="ntop"><br>
            <select name="select" class="lista">
                <option value="value1"></option>
                <option value="value2">Value 2</option>
                <option value="value3">Value 3</option>
            </select><br>
            <input type="text" class="ntop"><br>
            <input type="number" class="ntop"><br>
            <input type="text" class="ntop"><br>
        </div>
        <br><br>

        
      
    </div>

    <div class="btn-nuevo">
        <div class="btn-nuevo-cancel">
             <input type="button" value="Cancelar" class="btn-cancelar">
        </div>
        <div class="btn-nuevo-guardar">
             <input type="button" value="Guardar" class="btn-guardar">
        </div>
           
    </div>
       
   
@endsection

