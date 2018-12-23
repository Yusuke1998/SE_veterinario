@extends('layouts.my_app')
@section('title') Reglas a crear! @stop
@section('content')
<div class="col-md-12">
	<p class="text-center">Editar Regla.</p>
</div>
<style>
	label{
		background-color: white;
		padding: 1px;
	}
</style>
<div class="col-md-12">
	<form action="{{ route('Reglas.update',$regla->id) }}" method="POST">
		{{  csrf_field()  }}	
		<p class="h2 text-center">Regla</p>
		<input type="hidden" name="_method" value="PUT">
		<div class=" col-md-4 form-group">
			<label class="">
				Ingresa aqui el nombre.
			</label>
			<input value="{{ $regla->title }}" class="form-control" type="text" placeholder="Ejemplo: 'Regla para perros #1'" name="title">
		</div>
		<div class=" col-md-8 form-group">
			<label class="">
				Ingresa aqui la descripcion.
			</label>
			<textarea  class="form-control" type="text" placeholder="Ejemplo: 'Esta regla se aplicara a perros de raza... con problemas de...'" name="description">{{ $regla->description }}</textarea>
		</div>
		<div class="form-group">
			<label class="">
				Ingresa aqui el tratamiento.
			</label>
			<textarea  class="form-control" type="text" placeholder="Ejemplo: 'Es necesario aplicar inyecciones de ...'" name="treatment">{{ $regla->treatment }}</textarea>
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui el Peso, debe estar entre un minimo y un maximo.
			</label>
			<input value="{{ $regla->weight_1 }}" class="form-control" type="text" placeholder="Ejemplo: minimo '1'" name="weight_1">
			<input value="{{ $regla->weight_2 }}" class="form-control" type="text" placeholder="Ejemplo: maximo '10'" name="weight_2">
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui la Edad, debe estar entre un minimo y un maximo.
			</label>
			<input value="{{ $regla->age_1 }}" class="form-control" type="text" placeholder="Ejemplo: minimo '1'" name="age_1">
			<input value="{{ $regla->age_2 }}" class="form-control" type="text" placeholder="Ejemplo: maximo '20'" name="age_2">
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui el tipo y la raza correspondiente.
			</label>
			<select class="my_select_1" name="animal_id">
				<option selected value="{{ $regla->animal->id }}">{{ $regla->animal->name }}</option>
				@foreach($animales as $animal)
					@if($regla->animal->id == $animal->id)

					@else
						<option value="{{ $animal->id }}">{{ $animal->name }}</option>
					@endif
				@endforeach
			</select>
			<select class="my_select_1" name="race_id">
				<option selected value="{{ $regla->race->id }}">{{ $regla->race->name }}</option>
				@foreach($razas as $raza)
					@if($regla->race->id == $raza->id)

					@else
						<option value="{{ $raza->id }}">{{ $raza->name }}</option>
					@endif
				@endforeach
			</select>
		</div>
		<div class="form-group col-md-6">
			<label class="">
				Ingresa aqui el sintoma.
			</label>
			<select class="form-control my_select_2" name="symptom_id">
				<option selected value="{{ $regla->symptom->id }}">{{ $regla->symptom->name }}</option>
				@foreach($sintomas as $sintoma)
					@if($regla->symptom->id == $sintoma->id)

					@else
						<option value="{{ $sintoma->id }}">{{ $sintoma->name }}</option>
					@endif
				@endforeach
			</select>
		</div>
		<input class="form-control btn btn-success" type="submit" name="btn" value="Enviar">
	</form>
</div>
@stop

@section('scripts')
	$(".my_select_1").chosen({
	    no_results_text: "Oops, no se encontraron resultados! para ",
	    width: "45%",
	    rtl: true
	});

	$(".my_select_2").chosen({
	    no_results_text: "Oops, no se encontraron resultados! para ",
	    width: "100%",
	    placeholder_text_multiple: 'Selecciona'
	});
@stop