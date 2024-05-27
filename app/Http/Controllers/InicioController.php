<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use App\Models\inicio;
use App\Models\propuestas;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propuestas = $this->propuestasDifEstado();
        $conferencias = eventos::where('tipo', 0)->get();
        $eventosVirtuales = eventos::where('tipo', 1)->get();
        return view('inicio')->with([
            'conferencias' => $conferencias,
            'eventosVirtuales' => $eventosVirtuales,
            'propuestas' => $propuestas,
        ]);;
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
    public function show(inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inicio $inicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inicio $inicio)
    {
        //
    }

    public function propuestasDifEstado()
    {
        return propuestas::where('estado','!=', 0)->get();
    }
}
