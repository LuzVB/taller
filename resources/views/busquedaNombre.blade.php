@extends('master')


@section('contenido')

  <h2>Busqueda Por Nombre</h2>
  <br><br><br>
  <p>
    Ingrese el valor que desea buscar
  </p>
  <br>
  <form action="{{url('formulario')}}" method="POST">
  	{{csrf_field()}}
  <div class="form-row">
    <div class="col-7">
      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
   </div>

   <br><br>	<button type="submit" class="btn btn-outline-primary">Enviar</button>
   </form> 

 @stop  