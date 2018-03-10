@extends('master')


@section('contenido')

<h2>Compra</h2>
<br>
<p>
    Ingrese los siguientes datos:
</p>

<hr>

<form action="{{url('compra')}}" method="POST">
  {{csrf_field()}}
  <div class="form-row">
    <label for="inputEmail4">Nombre y apellidos del representante legal</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Apellido" name="apellido">
    </div>
  </div>
  <br>
  <div>
      <label for="inputEmail4">Cedula  del representante legal</label>
      <input type="text" class="form-control" name="cedula"><br>
      <label for="inputEmail4">Numero de Contrato</label>
      <input type="text" class="form-control" name="numero"><br>
      <label for="inputEmail4">Valor total del contrato</label>
      <input type="text" class="form-control" name="valor"><br>
  </div>

  <label for="inputEmail4">Registre los codigos</label>
  <div class="container">
  <div class="row">
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 1" name="codigo1"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 2" name="codigo2"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 3" name="codigo3"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 4" name="codigo4"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 5" name="codigo5"><br></div>
    <div class="w-100"></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 6" name="codigo6"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 7" name="codigo7"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 8" name="codigo8"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 9" name="codigo9"><br></div>
    <div class="col"> <input type="text" class="form-control" placeholder="Codigo 10" name="codigo10"><br></div>
  </div>
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion del contrato</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descr"></textarea>
  </div>
  <button type="submit" class="btn btn-info"">Enviar</button>
  <br><br>
</form>

@stop  