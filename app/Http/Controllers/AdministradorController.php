<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;



class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth()->User();
        return view('Administrador.perfil', ['user'=>$user]);
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
    public function edit($id)
{
    $user = User::find($id);
    return view('administrador.perfil', ['user'=>$user]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
{
    // Validar los datos de entrada
    $request->validate([
        'nombre' => 'required|string',
        'telefono' => 'required|string',
        'correo' => 'required|email',
    ]);

    // Obtener el usuario que deseas actualizar
    $user = User::findOrFail($request->id);

    // Actualizar los campos del usuario con los datos del formulario
    $user->name = $request->input('nombre');
    $user->telefono = $request->input('telefono');
    $user->email = $request->input('correo');

    // Guardar los cambios en la base de datos
    $user->save();

    return redirect()->route('perfil.edit', ['id' => $user->id])->with('success', 'Perfil actualizado exitosamente');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
