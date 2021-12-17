@extends('layouts.app', ['class' => 'login-page', 'page' => 'KARDEX', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

@section('img-logo')
<img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="" class="img-log">

@endsection

@section('menu')
        <nav class="navegacion">
            <ul class="menu">
				<li><a href="http://localhost:8000/kardex">KARDEX</a></li>
				<li><a href="http://localhost:8000/nuevo">Registro de Datos</a></li>
                <li><a href="http://localhost:8000/reporte">Reporte</a></li>
				<li><a href="#">Salidas</a>
					<ul class="submenu">
                    <li><a href="http://localhost:8000/salidaUsg">Salidas USG</a></li>
						<li><a href="#">Salidas Generales</a>
                        <ul class="submenu2">
                                <li><a href="#">Unidades Descargadas</a></li>
                                <li><a href="#">Total por Unidad</a></li>
                            </ul></li>
						
					</ul>
				</li>
				
                <li><a href="#">Ajustes</a></li>
                <li><a href="#">Inventario</a></li>
			</ul>

    </nav>
            

@endsection


@section('salir')
    <button type="button" class="btn-salir">Salir</button>

@endsection

    <div class="top-med1">
        <h5>Unidad de Servicios Generales<br> Control de Almacen <br> Mes: Octubre de 2021<br>  Valor: Dolares</h5>
        <h1>Salidas Unidad de Servicios Generales</h1>
    </div>

    <table>
        <th>Código</th>
        <th>Familia</th>
        <th>Unidad de Medida</th>
        <th>Costo Unitario</th>
        <th>Primer nivel Oriente</th>
        <th>Primer nivel Poniente</th>
        <th>Segundo nivel Oriente</th>
        <th>Segundo nivel Poniente</th>
        <th>Mantenimiento</th>
        <th>USG</th>
        <th class="total">Total</th>
       
        <tr>
           <td>00000000</td>
           <td>jua3n</td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23101001</td>
            <td>juan5</td>
            <td>jua3n</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>
           <td></td>
           <td></td>
           <td></td> 
        </tr>
        <tr>
            <td>23105001</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23105002</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23107001</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23109001</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23109003</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23111001</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23111002</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23113002</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23113004</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23115001</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td>23115099</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
            <td></td>
            <td><b>Totales</b></td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
    </table>
    
        
   
@endsection

