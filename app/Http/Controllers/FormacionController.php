<?php

namespace App\Http\Controllers;

use App\Models\formacion;
use App\Models\Testimonios;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonios = Testimonios::all();
        return view('formacion.formacion')->with([
            'testimonios' => $testimonios,
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
    public function show(formacion $formacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formacion $formacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formacion $formacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formacion $formacion)
    {
        //
    }
    public function videos()
    {
        return view('formacion.video');
    }
    public function infografia()
    {
        return view('formacion.infografia');
    }
}
