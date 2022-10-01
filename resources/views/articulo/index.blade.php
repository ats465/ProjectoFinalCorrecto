@extends('adminlte::page')

@section('title', 'Mantenimiento')

@section('content_header')
    <h1>Listado de Estudiantes</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>

<table id="articulos" class="table table-dark table-striped mt-4">
  <thead>
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Contrasena</th>
      <th scope="col">Edad</th>
      <th scope="col">Peso</th>
      <th scope="col">Talla</th>
      <th scope="col">Acciones</th>
</tr>
   </thead>
   <tbody>
   @foreach ($articulos as $articulo)
   <tr>
    <td>{{ $articulo->id}}</td>
    <td>{{ $articulo->Codigo}}</td>
    <td>{{ $articulo->Nombre}}</td>
    <td>{{ $articulo->Correo}}</td>
    <td>{{ $articulo->Contrasena}}</td>
    <td>{{ $articulo->Edad}}</td>
    <td>{{ $articulo->Peso}}</td>
    <td>{{ $articulo->Talla}}</td>
    <td>
        <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
        <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-info">Editar</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Borrar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
   $(document).ready(function () {
    $('#articulos').DataTable({
      "lengthMenu": [[5,10,50,-1],[5, 10, 50, "All"]]
    });
});
   </script>

@stop