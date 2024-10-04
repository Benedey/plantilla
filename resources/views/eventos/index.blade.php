<h1>Lista de Eventos</h1>
<a href="{{ route('eventos.create') }}">Crear Evento</a>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>Día</th>
            <th>Mes</th>
            <th>Año</th>
            <th>Hora</th>
            <th>Lugar</th>
            <th>Servicio</th>
            <th>Acciones</th>
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
                    <a href="{{ route('eventos.edit', $evento->id) }}">Editar</a>
                    <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
