<?php

namespace App\Http\Controllers;

use App\Materias;
use Illuminate\Http\Request;
use App\Trayectos;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias=Materias::all();
        $trayectos=Trayectos::all();
        return view('admin.materias.index', compact('materias','trayectos'));
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
        $create=Materias::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(Materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit(Materias $materias)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materias $materias)
    {
        $materias=Materias::find($request->id);
        $materias->codigo=$request->codigo;
        $materias->materia=$request->materia;
        $materias->unidad_c=$request->unidad_c;
        $materias->num_fases=$request->num_fases;
        $materias->malla=$request->malla;
        $materias->id_trayecto=$request->id_trayecto;
        $materias->status=$request->status;
        $materias->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materias $materias, $id)
    {
        $materias = Materias::find($id);
        $materias->delete();

        return redirect()->back();
    }
}
