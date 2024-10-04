@extends('layouts.app') <!-- Asegúrate de usar tu layout correcto -->

@section('content')
    <div class="container">
        <h1>Editar Evento</h1>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de edición -->
        <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="dia" class="form-label">Día</label>
                <input type="number" class="form-control" id="dia" name="dia" value="{{ old('dia', $evento->dia) }}" required>
            </div>

            <div class="mb-3">
                <label for="mes" class="form-label">Mes</label>
                <input type="text" class="form-control" id="mes" name="mes" value="{{ old('mes', $evento->mes) }}" maxlength="3" required>
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año</label>
                <input type="number" class="form-control" id="año" name="año" value="{{ old('año', $evento->año) }}" required>
            </div>

            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input type="text" class="form-control" id="hora" name="hora" value="{{ old('hora', $evento->hora) }}" maxlength="5" required>
            </div>

            <div class="mb-3">
                <label for="lugar" class="form-label">Lugar</label>
                <input type="text" class="form-control" id="lugar" name="lugar" value="{{ old('lugar', $evento->lugar) }}" maxlength="50" required>
            </div>

            <div class="mb-3">
                <label for="servicio" class="form-label">Servicio</label>
                <input type="text" class="form-control" id="servicio" name="servicio" value="{{ old('servicio', $evento->servicio) }}" maxlength="120" required>
            </div>

            <div class="mb-3">
                <label for="precio_paquete" class="form-label">Precio Paquete</label>
                <input type="number" class="form-control" id="precio_paquete" name="precio_paquete" value="{{ old('precio_paquete', $evento->precio_paquete) }}" required>
            </div>

            <div class="mb-3">
                <label for="apartado" class="form-label">Apartado</label>
                <input type="number" class="form-control" id="apartado" name="apartado" value="{{ old('apartado', $evento->apartado) }}" required>
            </div>

            <div class="mb-3">
                <label for="firma" class="form-label">Firma</label>
                <input type="text" class="form-control" id="firma" name="firma" value="{{ old('firma', $evento->firma) }}" maxlength="100" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('eventos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
