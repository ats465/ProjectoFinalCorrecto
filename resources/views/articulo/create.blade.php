@extends('adminlte::page')

@section('title', 'Registrar Estudiante')

@section('content_header')
    <h1>Registrar Estudiantes</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
    @csrf
    <div class="mb-3">
 <label for="" class="form-label">Codigo</label>
 <input id="Codigo" name="Codigo" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
 <label for="" class="form-label">Nombres</label>
 <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
 <label for="" class="form-label">Correos</label>
 <input id="Correo" name="Correo" type="text" class="form-control" tabindex="3">
</div>
<div class="mb-3">
 <label for="" class="form-label">Contraseña</label>
 <input id="Contrasena" name="Contrasena" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
 <label for="" class="form-label">Edad</label>
 <input id="Edad" name="Edad" type="text" class="form-control" tabindex="5">
</div>
<div class="mb-3">
 <label for="" class="form-label">Peso</label>
 <input id="Pesp" name="Peso" type="text" class="form-control" tabindex="6">
</div>
<div class="mb-3">
 <label for="" class="form-label">Talla</label>
 <input id="Talla" name="Talla" type="text" class="form-control" tabindex="1">
</div>
<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css"
@stop

@section('js')
@stop