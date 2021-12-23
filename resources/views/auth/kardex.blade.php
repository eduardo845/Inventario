@extends('layouts.app', [ 'class' => 'login-page', 'page' => 'Menú', 'contentClass' => 'login-page', 'section' => 'auth'])



@section('content')



    <div class="top-med1">
        <h5>Unidad de Servicios Generales<br> Control de Almacen <br> Mes: Octubre de 2021<br>  Valor: Dolares</h5>
        <h1>KARDEX</h1>
    </div>

    <table>
        <th scope="row">Código</th>
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
        @foreach ($kardex as $item)
           <td>{{$item->codigo}}</td>
           <td>{{$item->especifico}}</td>
           <td>{{$item->cuenta_contable}}</td>
           <td>{{$item->familia}}</td>
           <td>{{$item->unidad_de_medida}}</td>
           <td>{{$item->existencia_inicial}}</td>
           <td>{{$item->compras_cantidad}}</td>
           <td>{{$item->consumo}}</td>
           <td>{{$item->existencia_final}}</td>
           <td>{{$item->costo_unitario}}</td>
           <td>{{$item->saldo_inicial}}</td>
           <td>{{$item->compras_saldo}}</td>
           <td>{{$item->saldo_consumo}}</td>
           <td>{{$item->saldo_final}}</td>
          @endforeach 
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

