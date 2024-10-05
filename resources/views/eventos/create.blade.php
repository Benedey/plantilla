@extends('layouts.plantillabase')

@section('title','Home')
@section('h-title','Eventos')
@section('card-title','Crear Evento')

@section('content')
<div class="container mt-5">
    <h1>Crear Evento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('eventos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dia">Día:</label>
            <input type="text" class="form-control" id="dia" name="dia" value="{{ old('dia') }}">
        </div>

        <div class="form-group">
            <label for="mes">Mes:</label>
            <input type="text" class="form-control" id="mes" name="mes" value="{{ old('mes') }}">
        </div>

        <div class="form-group">
            <label for="año">Año:</label>
            <input type="text" class="form-control" id="año" name="año" value="{{ old('año') }}">
        </div>

        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="text" class="form-control" id="hora" name="hora" value="{{ old('hora') }}">
        </div>

        <div class="form-group">
            <label for="lugar">Lugar:</label>
            <input type="text" class="form-control" id="lugar" name="lugar" value="{{ old('lugar') }}">
        </div>

        <div class="form-group">
            <label for="servicio">Servicio:</label>
            <input type="text" class="form-control" id="servicio" name="servicio" value="{{ old('servicio') }}">
        </div>

        <div class="form-group">
            <label for="precio_paquete">Precio Paquete:</label>
            <input type="text" class="form-control" id="precio_paquete" name="precio_paquete" value="{{ old('precio_paquete') }}">
        </div>

        <div class="form-group">
            <label for="apartado">Apartado:</label>
            <input type="text" class="form-control" id="apartado" name="apartado" value="{{ old('apartado') }}">
        </div>

        <div class="form-group">
            <label for="firma">Firma:</label>
            <input type="text" class="form-control" id="firma" name="firma" value="{{ old('firma') }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crear</button>
    </form>
</div>
@endsection
