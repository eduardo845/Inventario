@extends('layouts.app', ['class' => 'login-page', 'page' => 'KARDEX', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

   
@section('texto')

  <h5>Unidad de Servicios Generales<br> Control de Almacen <br> Mes: Octubre de 2021<br>  Valor: Dolares</h5>


@endsection
@section('img-logo')
<img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="">

@endsection

@section('salir')
<button type="button" class="btn-salir">Salir</button>

@endsection

    <table>
        <th>Código</th>
        <th>Específico</th>
        <th>Cuenta Contable</th>
        <th>Familia</th>
        <th>Unidad de Medida</th>
        <th>Existencia Inicial</th>
        <th>Cantidad de Compras</th>
        <th>Consumo</th>
        <th>Existencia Final</th>
        <th>Costo Unitario</th>
        <th>Saldo Inicial</th>
        <th>Saldo de Compras</th>
        <th>Saldo Consumo</th>
        <th>Saldo Final</th>
        <tr>
           <td>juan</td>
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
           
           
        </tr>
        <tr>
            <td>juan4</td>
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
            
        </tr>
        <tr>
            <td>""</td>
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
            
        </tr>
    </table>
    
        
   
@endsection

