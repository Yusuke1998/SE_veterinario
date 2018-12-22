@extends('layouts.my_app')
@section('title') Consulta sobre tu mascota! @stop
@section('content')
<div class="col-md-12">
	<h1 class="text-center">Hola, soy el asistente veterinario!</h1>
</div>
<div class="col-md-12">
	<p class="text-center">Ingresa abajo tus datos personales y los de tu mascota!</p>
	<form action="{{ route('Mascota.store') }}" method="POST">
		{{  csrf_field()  }}
		<div class="col-md-5">
			<p class="h2 text-center">DUEÑO</p>
			<div class="form-group">
				<label class="">
					Nombres
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Jhonny Jose'" name="firstname">
			</div>
			<div class="form-group">
				<label class="">
					Apellidos
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Perez Martinez'" name="lastname">
			</div>
			<div class="form-group">
				<label class="">
					Correo Electronico
				</label>
				<input class="form-control" type="email" placeholder="Ejemplo: 'JhonnyJose1998@gmail.com'" name="email">
			</div>
			<div class="form-group">
				<label class="">
					Telefono
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '04161428973'" name="telephone">
			</div>
			<div class="form-group">
				<label class="">
					Direccion
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Aragua, Villa de cura, las mercedes'" name="address">
			</div>
		</div>
		{{-- <-----------------------------------------------------------> --}}
		<div class="col-md-7">	
			<p class="h2 text-center">MASCOTA</p>
			<div class="form-group">
				<label class="">
					Ingresa aqui el nombre.
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: 'Chiquitin'" name="name">
			</div>
			<div class="form-group">
				<label class="">
					Ingresa aqui el Peso.
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '10'" name="weight">
			</div>
			<div class="form-group">
				<label class="">
					Ingresa aqui la Edad.
				</label>
				<input class="form-control" type="text" placeholder="Ejemplo: '5'" name="age">
			</div>
			<div class="form-group">
				<label class="">
					Ingresa aqui el tipo y la raza correspondiente.
				</label>
				<select class="my_select_1" name="animal_id">
					@foreach($animales as $animal)
						<option value="{{ $animal->id }}">{{ $animal->name }}</option>
					@endforeach
				</select>
				<select class="my_select_1" name="race_id">
					<option value="">No aplica</option>
					@foreach($razas as $raza)
						<option value="{{ $raza->id }}">{{ $raza->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="">
					Ingresa aqui las vacunas que tenga.
				</label>
				<select multiple class="form-control my_select_2" name="vaccines[]">
					@foreach($vacunas as $vacuna)
						<option value="{{ $vacuna->id }}">{{ $vacuna->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="">
					Ingresa aqui los sintomas que tenga.
				</label>
				<select multiple class="form-control my_select_2" name="symptoms[]">
					@foreach($sintomas as $sintoma)
						<option value="{{ $sintoma->id }}">{{ $sintoma->name }}</option>
					@endforeach
				</select>
			</div>
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
