@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf    
@method('PUT')
    <div class="mb-3">
 <label for="" class="form-label">Codigo</label>
 <input id="Codigo" name="Codigo" type="text" class="form-control" value="{{$articulo->Codigo}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Nombres</label>
 <input id="Nombre" name="Nombre" type="text" class="form-control"  value="{{$articulo->Nombre}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Correos</label>
 <input id="Correo" name="Correo" type="text" class="form-control"  value="{{$articulo->Correo}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Contraseña</label>
 <input id="Contrasena" name="Contrasena" type="text" class="form-control"  value="{{$articulo->Contrasena}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Edad</label>
 <input id="Edad" name="Edad" type="text" class="form-control"  value="{{$articulo->Edad}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Peso</label>
 <input id="Pesp" name="Peso" type="text" class="form-control"  value="{{$articulo->Peso}}">
</div>
<div class="mb-3">
 <label for="" class="form-label">Talla</label>
 <input id="Talla" name="Talla" type="text" class="form-control"  value="{{$articulo->Talla}}">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop