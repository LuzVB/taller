@extends('master')


@section('contenido')

  <h2>TODOS LOS PRODUCTOS</h2>
  <br>
  <br>
  <form action="{{url('productos')}}" method="POST">
  	{{csrf_field()}}

  <div class="form-row">
   <button type="submit" class="btn btn-outline-primary">MOSTRAR</button>
   </form> 

 @stop  