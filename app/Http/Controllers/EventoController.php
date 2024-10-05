<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use PDF; 

class EventoController extends Controller
{
    public function index()
    {
        // Obtener solo los eventos del usuario autenticado
        $eventos = Evento::where('id_usuario', auth()->id())->get();
        
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
            'servicio' => 'required|string|max:120',
            'precio_paquete' => 'required|integer',
            'apartado' => 'required|integer',
            'firma' => 'required|string|max:100',
        ]);
    
        // Actualizar el evento sin modificar el id_usuario
        $evento->update($request->except('id_usuario'));
        
        return redirect()->route('eventos.index')->with('success', 'Evento actualizado exitosamente');
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente');
    }

    public function generarPDF($evento_id)
    {
        // Obtener el evento junto con la información del usuario
        $evento = Evento::with('user')->findOrFail($evento_id);
    
        // Cargar la vista y generar el PDF
        $pdf = PDF::loadView('eventos.contrato', compact('evento'));
    
        // Retornar el PDF como descarga
        return $pdf->download('contrato_evento_'.$evento->id.'.pdf');
    }
    
}
