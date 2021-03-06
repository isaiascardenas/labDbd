@extends('layouts.admin')

@section('content')
	<h2>
    <i class="fas fa-map-marker-alt"></i> Editar Aeropuerto #{{ $aeropuerto->id }}
  </h2>
	
	<hr>
	
	@include('layouts.messages')

	<form method="post" action="{{ action('ReservaVuelo\AeropuertosController@update', $aeropuerto->id) }}" method="post">
		{{ csrf_field() }}
    <input name="_method" type="hidden" value="PATCH">

		<div class="form-group row">
			<label class="col-3" for="codigo">C&oacute;digo</label>
			<div class="col-9">
				<input type="text" class="form-control" name="codigo" id="codigo" value="{{ $aeropuerto->codigo }}">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-3" for="nombre">Nombre</label>
			<div class="col-9">
				<input type="text" class="form-control" name="nombre" id="nombre" value="{{ $aeropuerto->nombre }}">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-3" for="direccion">Direcci&oacute;n</label>
			<div class="col-9">
				<input type="text" class="form-control" name="direccion" id="direccion" value="{{ $aeropuerto->direccion }}">
			</div>
		</div>

		<div class="form-group row">
			<label class="col-3" for="ciudad_id">Ciudad</label>
			<div class="col-9">
				<select class="form-control" name="ciudad_id" id="ciudad_id">
					@foreach($ciudades as $ciudad)
					<option value="{{ $ciudad->id }}" {{ $aeropuerto->ciudad->id == $ciudad->id?'selected':'' }}>{{ $ciudad->nombre .', '. $ciudad->pais->nombre }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="text-right">
			<a href="/aeropuertos/{{ $aeropuerto->id }}" class="btn btn-info">
        <i class="fas fa-ban"></i> Cancelar
      </a>
			<button type="submit" class="btn btn-primary">
        <i class="fas fa-save"></i> Actualizar
      </button>
		</div>
	</form>
@endsection