<?php

namespace App\Http\Controllers;

use App\Models\administracion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administracion.admin');
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
    public function show(administracion $administracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(administracion $administracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, administracion $administracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(administracion $administracion)
    {
        //
    }

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'password');
    
        if (Auth::attempt($credentials)) {
            Session::forget('error');
            session(['user' => Auth::user()]);
            return redirect()->intended('administracion');
        } else {
            // Verificar si el usuario existe
            $user = User::where('correo', $request->input('correo'))->first();

            if ($user) {
                // El usuario existe, pero la contraseña es incorrecta
                return redirect()->back()->withInput()->withErrors(['password' => 'La contraseña es incorrecta']);
            } else {
                // El usuario no existe
                return redirect()->back()->withInput()->withErrors(['correo' => 'El correo electrónico no está registrado']);
            }
        }
    }


    public function user()
    {
        return view('administracion.usuario');
    }

    public function logout()
    {
        Session::forget('error');
        Session::forget('user');

        return redirect('/ingresar');
    }

    

}
