@extends('layouts.my_app')
@section('title') Raza a Editar! @stop
@section('title_nav') SE @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Editar Raza.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Razas.update',$raza->id) }}" method="POST">
		{{  csrf_field()  }}	
		<input type="hidden" name="_method" value="PUT">
		<p class="h2 text-center">Raza</p>
		<div class=" col-md-12 form-group">
			<label class="">
				Nombre.
			</label>
			<input value="{{ $raza->name }}" class="form-control" type="text" placeholder="Ejemplo: 'Perro'" name="name">
		</div>
		<div class=" col-md-12 form-group">
			<label class="">
				Descripcion.
			</label>
			<textarea class="form-control" name="description">{{ $raza->description }}</textarea>
		</div>

		<div class="col-md-12 form-group">
			<select class="my_select form-control" name="animal_id">
				<option value="{{ $raza->animal->id }}">{{ $raza->animal->name }}</option>

				@foreach($animales as $animal)
					@if($raza->animal->id == $animal->id)
					
					@else
						<option value="{{ $animal->id }}">{{ $animal->name }}</option>
					@endif
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-12">
			<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
		</div>
	</form>
</div>
@stop

@section('scripts')
	$(".my_select").chosen({
	    no_results_text: "Oops, no se encontraron resultados! para ",
	    width: "100%",
	    placeholder_text_multiple: 'Selecciona'
	});
@stop