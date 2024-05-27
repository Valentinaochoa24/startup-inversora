<?php

namespace App\Http\Controllers;

use App\Models\propuestas;
use App\Models\User;
use App\Models\Utilidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PropuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $propuestas = $this->propuestasDifEstado();
        return view('propuestas.propuestas')->with([
            'propuestas' => $propuestas,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'monto' => 'required|numeric',
                'documento' => 'nullable|mimes:pdf|max:3048',
                'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:3048',
            ]);
        
            // Almacenar los datos en la base de datos
            $propuesta = new propuestas();
            $propuesta->nombre = $request->input('nombre');
            // $propuesta->tipo = 'tipo_definido'; // Aquí deberías definir el valor del tipo de propuesta
            $propuesta->id_user = auth()->id(); // Obtener el ID del usuario autenticado
            $propuesta->descripcion = $request->input('descripcion');
            $propuesta->estado = '1'; // Aquí deberías definir el valor del estado de la propuesta
            $propuesta->monto = $request->input('monto');
        
            // Guardar el documento PDF si se proporcionó
            if ($request->hasFile('documento')) {
                $documento = $request->file('documento');
                $nombreDocumento = $documento->getClientOriginalName(); // Obtener el nombre original del archivo
                $rutaDocumento = $documento->storeAs('documentos', $nombreDocumento, 'public');
                $propuesta->documento = $rutaDocumento;
            }
            // Guardar la imagen si se proporcionó
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = $imagen->getClientOriginalName(); // Obtener el nombre original del archivo
                $rutaImagen = $imagen->storeAs('imagenes', $nombreImagen, 'public');
                $propuesta->imagen = $rutaImagen;
            }
            $propuesta->save();
        
            // Redireccionar o devolver una respuesta
            return redirect()->back()->with('success', 'Propuesta creada exitosamente.');
        } catch (\Exception $e) {
            error_log('Fatal error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Ha ocurrido un error al procesar la propuesta. Por favor, inténtalo de nuevo más tarde.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(propuestas $propuestas)
    {
        $user = User::where('id', auth()->id())->first();
        $propuestas = propuestas::where('id_user', session('user')->id)->get();
        $allPropuestas = propuestas::all();

        return view('administracion.propuestas.propuestas')->with([
            'propuestas' => $propuestas,
            'user' => $user,
            'allPropuestas' => $allPropuestas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(propuestas $propuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, propuestas $propuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(propuestas $propuestas)
    {
        //
    }

    public function propuestasDifEstado()
    {
        return propuestas::where('estado','!=', 0)->get();
    }
    public function aprobar( Request $request)
    {
        $request->validate([
            'monto' => 'required|numeric',
        ]);

        $utilidades = new Utilidades;

        $utilidades->monto_total = $request->monto;
        $utilidades->id_propuesta = $request->id_propuesta;
        $utilidades->id_user = auth()->id();

        if($utilidades->save())
        {
            return redirect()->back()->with('success', 'Aprobado exitosamente.');
        }else{
            return redirect()->back()->with('error', 'Error al almacenar estado.');
        }

    }
}
