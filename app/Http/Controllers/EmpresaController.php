<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = $this->empresasDifEstado();
        return view('administracion.empresa.empresa')->with([
            'empresas' => $empresas,
            
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id, Request $request)
    {
        $empresa = empresa::find($id);
        $empresa->nombre = $request["nombreEmpresa"];
        $empresa->rut = $request["rut"];
        if ($request->hasFile('documentorut')) {
            $documento = $request->file('documentorut');
            $nombreDocumento = 'documentorut' . $id;
            // Verificar si el archivo ya existe antes de intentar guardarlo
            if (Storage::exists('documentos/' . $nombreDocumento)) {
                Storage::delete('documentos/' . $nombreDocumento); // Eliminar el archivo existente
            }
            $rutaDocumento = $documento->storeAs('documentos', $nombreDocumento, 'public');
            $empresa->documento_rut = $rutaDocumento;
        }
        if ($request->hasFile('documentoRepresentanteLegal')) {
            $documento = $request->file('documentoRepresentanteLegal');
            $nombreDocumento = 'documentoRepresentanteLegal' . $id; // Obtener el nombre original del archivo
            if (Storage::exists('documentos/' . $nombreDocumento)) {
                Storage::delete('documentos/' . $nombreDocumento); // Eliminar el archivo existente
            }
            $rutaDocumento = $documento->storeAs('documentos', $nombreDocumento, 'public');
            $empresa->documento_id_representante = $rutaDocumento;
        }
        if ($request->hasFile('documentoAdicional')) {
            $documento = $request->file('documentoAdicional');
            $nombreDocumento = 'documentoAdicional' . $id; // Obtener el nombre original del archivo
            if (Storage::exists('documentos/' . $nombreDocumento)) {
                Storage::delete('documentos/' . $nombreDocumento); // Eliminar el archivo existente
            }
            $rutaDocumento = $documento->storeAs('documentos', $nombreDocumento, 'public');
            $empresa->documentos = $rutaDocumento;
        }

        if( $empresa->save() ){
            return redirect()->back()->with('success', 'Información de la empresa creada exitosamente.');
        }else{
            return redirect()->back()->with('error', 'Ha ocurrido un error al procesar la empresa. Por favor, inténtalo de nuevo más tarde.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function empresasDifEstado()
    {
        return  empresa::where('id_user', session('user')->id)->get();

    }
}
