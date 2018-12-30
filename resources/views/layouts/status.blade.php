{{-- Errores --}}
@foreach($errors->all() as $error)
	<div class="col-md-12">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{{$error}}
		</div>
	</div>
@endforeach

{{-- Avisos --}}
@if(session('info'))
	<div class="col-md-12">
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{{ session('info') }}
		</div>
	</div>
@endif