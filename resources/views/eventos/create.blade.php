@extends('layouts.plantillabase')

@section('title','Home')
@section('h-title','Eventos')
@section('card-title','Lista de Eventos')

@section('content')
<h1>Crear Evento</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('eventos.store') }}" method="POST">
    @csrf
    <label>Día:</label>
    <input type="text" name="dia" value="{{ old('dia') }}">
    <label>Mes:</label>
    <input type="text" name="mes" value="{{ old('mes') }}">
    <label>Año:</label>
    <input type="text" name="año" value="{{ old('año') }}">
    <label>Hora:</label>
    <input type="text" name="hora" value="{{ old('hora') }}">
    <label>Lugar:</label>
    <input type="text" name="lugar" value="{{ old('lugar') }}">
    <label>Servicio:</label>
    <input type="text" name="servicio" value="{{ old('servicio') }}">
    <label>Precio Paquete:</label>
    <input type="text" name="precio_paquete" value="{{ old('precio_paquete') }}">
    <label>Apartado:</label>
    <input type="text" name="apartado" value="{{ old('apartado') }}">
    <label>Firma:</label>
    <input type="text" name="firma" value="{{ old('firma') }}">
    <button type="submit">Crear</button>
</form>
@endsection