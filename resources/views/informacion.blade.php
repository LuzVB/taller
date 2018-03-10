@extends('master')

@section('contenido')

<div class="container">
  <h2>Datos Compra</h2>  
                  <br><br>
                <table class="table">
                 <thead class="thead-light">
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Cedula</th>
                      <th scope="col">Numero</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Codigo 1</th>
                      <th scope="col">Codigo 2</th>
                      <th scope="col">Codigo 3</th>
                      <th scope="col">Codigo 4</th>
                      <th scope="col">Codigo 5</th>
                      <th scope="col">Codigo 6</th>
                      <th scope="col">Codigo 7</th>
                      <th scope="col">Codigo 8</th>
                      <th scope="col">Codigo 9</th>
                      <th scope="col">Codigo10</th>
                      <th scope="col">Valor Total</th>
                      <th scope="col">Descripcion</th>
                      
                    </tr>
                   </thead>
                  <tbody>
                  <?php foreach ($personas as $persona): ?>
                    <tr>
                      <?php foreach ($persona as $indice => $valor): ?>
                      <td>{{$valor}}</td>
                      <?php endforeach ?>
                      </tr>
                  <?php endforeach ?>
                   </tbody>
              </table>    
</div>
@stop