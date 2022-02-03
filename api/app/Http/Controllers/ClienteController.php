<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = clientes::all();
        return $clientes;

     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new clientes();
        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->direccion = $request->direccion;
        $clientes->fecha_nacimiento = $request->fecha_nacimiento;

        $clientes->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $clientes = clientes::findOrfail($request->id);
        $clientes->dni = $request->dni;
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->direccion = $request->direccion;
        $clientes->fecha_nacimiento = $request->fecha_nacimiento;

        $clientes->save();

        return $clientes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $clientes = clientes::destroy($request->id);
        return $clientes;
    }
}
