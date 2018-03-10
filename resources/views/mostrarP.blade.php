@extends('master')

@section('contenido')

<div class="container">
  <h2>Resultados de la busqueda</h2>  
                  <br><br>
                          <table class="table">
                 <thead class="thead-light">
                    <tr>
                      <th scope="col">Codigo</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Valor</th>
                      <th scope="col">Clase</th>
                      <th scope="col">Tipo</th>
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
                          <!-- {{$indice}} - {{$valor}}  -->   
</div>
@stop