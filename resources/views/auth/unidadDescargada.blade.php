@extends('layouts.app', ['class' => 'login-page', 'page' => 'KARDEX', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

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

    <div class="top-med1">
        <h5>Unidad de Servicios Generales<br> Control de Almacen <br> Mes: Octubre de 2021<br>  Valor: Dolares</h5>
        <h1>Unidades Descargadas</h1>
    </div>

    <table>
        <th>CODIGO</th>
        <th>FAMILIA</th>
        <th>UNIDAD DE MEDIDA</th>
        <th>COSTO UNITARIO</th>
        <th>CONSEJO DIRECTIVO</th>
        <th>PRESIDENCIA</th>
        <th>DIRECCION EJECUTIVA</th>
        <th>PLANIFICACION Y DESARROLLO</th>
        <th>RECURSOS HUMANOS</th>
        <th>GERENCIA FINANCIERA</th>
        <th>SERVICIOS GENERALES</th>
        <th>GERENCIA LEGAL</th>
        <th>ADQUISICIONES Y CONTRATACIONES</th>
        <th>GERENCIA FORMACION CONTINUA</th>
        <th>GERENCIA FORMACION INICIAL</th>
        <th>GERENCIA TECNICA</th>
        <th>CENTRO FORMACION PROFESIONAL SAN BARTOLO</th>
        <th>MONITOREO Y EVALUACION DE LA F.P.</th>
        <th>ATENCION Y ACCESO A LA INFORMACION</th>
        <th>FORMACION A DISTANCIA</th>
        <th>GERENCIA DE ESTUDIO E INVESTIGACION DE LA FORMACION PROFESIONAL</th>
        <th>CENTRO DE DOCUMENTACION E INFORMACION</th>
        <th>GERENCIA DE COMUNICACIONES</th>
        <th>GERENCIA DE TECNOLOGIAS DE LA INFORMACION </th>
        <th>AUDITORIA INTERNA</th>
        <th class="total">UNIDADES DESCARGADAS</th>
       
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
            <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>  
           <td></td>
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
       
    </table>
    
        
   
@endsection

