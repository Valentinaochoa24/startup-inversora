<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = eventos::all();
        $conferencias = eventos::where('tipo', 0)->get();
        $eventosVirtuales = eventos::where('tipo', 1)->get();
        return view('eventos.eventos')->with([
            'eventos' => $eventos,
            'conferencias' => $conferencias,
            'eventosVirtuales' => $eventosVirtuales,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Create()
    {
        return view('administracion.usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        // $request->validate([
        //     'nombre' => 'required|string|max:255',
        //     'tipo' => 'required|string|max:255',
        //     'fecha' => 'required|date',
        //     'descripcion' => 'required|string',
        //     'ubicacion' => 'required|string',
        //     'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
        // ]);

        // Guardar los datos del formulario en la base de datos
        $evento = new eventos();
        $evento->nombre = $request->nombre;
        $evento->tipo = $request->tipo;
        $evento->fecha_evento = $request->fecha;
        $evento->descripcion = $request->descripcion;
        $evento->ubicacion = $request->ubicacion;
       
        
        // Primero guardamos el evento para obtener el ID asignado
        $evento->save();

        // Ahora podemos obtener el ID del evento recién creado
        $eventoId = $evento->id;

        // Generamos un nombre único para la imagen usando el ID del evento y la marca de tiempo actual
        $imagenNombre = 'evento'.$eventoId .'.' . $request->imagen->extension();

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $rutaImagen = $imagen->storeAs('imagenes', $imagenNombre, 'public'); // Almacenar la imagen
        
            // Optimizar la imagen después de almacenarla
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize(storage_path('app/public/' . $rutaImagen));
            
            // Asignar la ruta de la imagen optimizada al modelo
            $evento->imagen = $rutaImagen;
        }
        
        // Guardar el evento con el nombre de la imagen actualizado
        $evento->save();

        // Redireccionar o devolver una respuesta
        return redirect()->back()->with('success', 'Evento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(eventos $eventos)
    {
        $eventos = eventos::all();
        return view('administracion.eventos', compact('eventos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eventos $eventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, eventos $eventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eventos $eventos)
    {
        //
    }
    public function showForId($id)
    {
        $evento = eventos::find($id);
        return view('eventos.eventoForId', compact('evento'));
    }
}
