@extends('layouts.plantillabase')

@section('title','Home')
@section('h-title','Eventos')


@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Lista de Eventos</h1>
    <a href="{{ route('eventos.create') }}" class="btn btn-primary mb-3">Crear Evento</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Día</th>
                    <th scope="col">Mes</th>
                    <th scope="col">Año</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->dia }}</td>
                        <td>{{ $evento->mes }}</td>
                        <td>{{ $evento->año }}</td>
                        <td>{{ $evento->hora }}</td>
                        <td>{{ $evento->lugar }}</td>
                        <td>{{ $evento->servicio }}</td>
                        <td>
                            <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
