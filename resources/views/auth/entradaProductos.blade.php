@extends('layouts.app', ['class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])

@section('content')


    
   
    <div class="nuevo">
        
       <span class="new-registro">Entrada de Productos</span><br>
       <span class="letra">Seleccione una Cuenta Contable para conocer sus Entradas</span><br><br>
      
        
    </div>
    <div class="nuevo1">
        <div class="nuevo1-left">
            <span class="letra">N° de Cuenta Contable:</span><br><br><br>
            
        </div>
        <div class="nuevo1-right">
        <select name="select" class="lista">
                <option value="value1"></option>
                <option value="value2">Value 2</option>
                <option value="value3">Value 3</option>
            </select><br><br><br>
           
        </div>
        <br><br>
       
        
      
    </div>
    <table>
        <th>CUENTA CONTABLE</th>
        <th>FAMILIA</th>
        <th>UNIDAD DE MEDIDA</th>
        <th>PRECIO UNITARIO</th>
        <th>CANTIDAD DE COMPRAS</th>
        <th>COMPRAS EN SALDO</th>
        <th>TOTAL</th>
        
        <tr>
           <td>0000000</td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           
           
           
        </tr>
        <tr>
            <td>0000000</td>
            <td>juan5</td>
            <td>jua3n</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
            
        </tr>
        <tr>
            <td>0000000</td>
            <td>""</td>
            <td>""</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
           
            
        </tr>
    </table>
    <!--<div class="btn-nuevo">
        <div class="btn-nuevo-cancel">
             <input type="button" value="Cancelar" class="btn-cancelar">
        </div>
        <div class="btn-nuevo-guardar">
             <input type="button" value="Guardar" class="btn-guardar">
        </div>
           
    </div>-->
       
   
@endsection

