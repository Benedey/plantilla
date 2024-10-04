<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dia' => 'required|integer',
            'mes' => 'required|string|max:10',
            'año' => 'required|integer',
            'hora' => 'required|string|max:5',
            'lugar' => 'required|string|max:50',
            'servicio' => 'required|string|max:120',
            'precio_paquete' => 'required|integer',
            'apartado' => 'required|integer',
            'firma' => 'required|string|max:100',
        ]);
    
        // Asignar el usuario logueado automáticamente
        $evento = new Evento($request->all());
        $evento->id_usuario = auth()->id(); // Asignar el ID del usuario logueado
        $evento->save();
    
        return redirect()->route('eventos.index')->with('success', 'Evento creado exitosamente');
    }
    
    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }

    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'dia' => 'required|integer',
            'mes' => 'required|string|max:3',
            'año' => 'required|integer',
            'hora' => 'required|string|max:5',
            'lugar' => 'required|string|max:50',
            'id_usuario' => 'required|exists:users,id',
            'servicio' => 'required|string|max:120',
            'precio_paquete' => 'required|integer',
            'apartado' => 'required|integer',
            'firma' => 'required|string|max:100',
        ]);

        $evento->update($request->all());
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado exitosamente');
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente');
    }
}
