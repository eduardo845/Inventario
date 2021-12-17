@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')

@section('texto')
 
   
@endsection

@section('img-logo')
<img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="" class="img-log">

@endsection

@section('menu')
        <nav class="navegacion">
            <ul class="menu">
				<li><a href="http://localhost:8000/kardex">KARDEX</a></li>
                <li><a href="#">Formularios</a>
                 <ul class="submenu">
                                 <li><a href="http://localhost:8000/nuevo">Registro de Datos</a></li>
                                <li><a href="http://localhost:8000/solicitudPedido">Solicitud de Pedido</a></li>
                                <li><a href="http://localhost:8000/entradaProductos">Entrada de Productos</a></li>
                            </ul></li>
                <li><a href="http://localhost:8000/reporte">Reporte</a></li>
				<li><a href="#">Salidas</a>
					<ul class="submenu">
                    <li><a href="http://localhost:8000/salidaUsg">Salidas USG</a></li>
						<li><a href="#">Salidas Generales</a>
                        <ul class="submenu2">
                                <li><a href="http://localhost:8000/descargas">Unidades Descargadas</a></li>
                                <li><a href="http://localhost:8000/totalProducto">Total por Unidad</a></li>
                            </ul></li>
						
					</ul>
				</li>
				<li><a href="http://localhost:8000/compras">Compras</a></li>
                <li><a href="http://localhost:8000/ajuste">Ajustes</a></li>
                <li><a href="http://localhost:8000/inventario">Inventario</a></li>
			</ul>

    </nav>
            

@endsection

@section('salir')
<button type="button" class="btn-salir">Salir</button>

@endsection
    
   
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

