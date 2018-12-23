@extends('layouts.my_app')
@section('title') Animal a Editar! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Editar animal.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Animales.update',$animal->id) }}" method="POST">
		{{  csrf_field()  }}	
		<input type="hidden" name="_method" value="PUT">
		<p class="h2 text-center">Animal</p>
		<div class=" col-md-12 form-group">
			<label class="">
				Nombre.
			</label>
			<input value="{{ $animal->name }}" class="form-control" type="text" placeholder="Ejemplo: 'Perro'" name="name">
		</div>
		<div class=" col-md-12 form-group">
			<label class="">
				Descripcion.
			</label>
			<textarea class="form-control" name="description">{{ $animal->description }}</textarea>
		</div>

		<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
	</form>
</div>
@stop