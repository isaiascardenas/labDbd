@extends('layouts.admin')

@section('content')
    <h2>
        <i class="fas fa-map-marker-alt"></i> Sucursal #{{ $sucursal->id }}
    </h2>

    <hr>

    <div class="form-group row">
        <label class="col-3" for="ciudad"> Ciudad </label>
        <div class="col-9">{{ $sucursal->ciudad->nombre }}</div>
    </div>

    <div class="form-group row">
        <label class="col-3" for="compania"> Compañia </label>
        <div class="col-9">{{ $sucursal->compania->nombre }}</div>
    </div>

    <div class="row">
        <div class="col-auto mr-auto">
            <a href="/sucursales/" class="btn btn-info float-left">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </div>

        <div class="col-auto">
            <a href="/sucursales/{{ $sucursal->id }}/edit" class="btn btn-primary">
                <i class="fas fa-edit"></i> Editar
            </a>
        </div>

        <div class="auto">
            <form action="{{ action('ReservaAuto\SucursalesController@destroy', $sucursal->id) }}" method="POST" onsubmit="return confirm('¿Esta seguro que desea eliminar?')">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i> Eliminar
                </button>
            </form>
        </div>

    </div>
@endsection
