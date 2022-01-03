@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')

   
    <div class="nuevo">
        
       <span class="new-registro">Registro de Nuevo Producto</span><br>
       <span class="letra">Seleccione la información solicitada para el ingreso de un nuevo producto</span><br><br>
      
        
    </div>
        <form method="POST" action="/nuevo" role="form">
            @csrf
        <div class="nuevo1">
            <div class="nuevo1-left">
                <span class="letra">Nombre del producto:</span><br>
                <span class="letra"> Descripción del producto:</span><br>
                <span class="letra">Código:</span><br>
                <span class="letra">Específico:</span><br>
                <span class="letra">Cuenta Contable:</span><br>
                <span class="letra">Unidad de Medida:</span><br>
                <span class="letra">Cantidad en Existencia:</span>

            </div>
            <div class="nuevo1-right">
                <input type="text" class="ntop" name="nombre"><br>
                <input type="text" class="ntop" name="descripcion"><br>
                <select  class="lista" name="codigo">
                @foreach($codigos as $item)
                    <option value="{{$item->id}}">{{$item->numero}}</option>
                @endforeach
                </select><br>
                <select class="lista" name="especifico">
                    @foreach($especificos as $item)
                    <option value="{{$item->id}}">{{$item->numero}}</option>
                    @endforeach 
                </select><br>
                <select class="lista" name="cuenta_contable">
                    @foreach($cuentas as $item)
                    <option value="value1">{{$item->numero}}</option>
                    @endforeach
                </select><br>
                <select class="lista" name="unidad_medida">
                    @foreach($medidas as $item)
                    <option value="value1">{{$item->nombre}}</option>
                    @endforeach
                </select><br>
                <input type="text" class="ntop" name="cantidad_existencia">
                
                <input type="submit" value="Guardar" class="btn-nuevo-guardar">
                
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
    </form>
    
       
   
@endsection

