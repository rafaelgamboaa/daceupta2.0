<?php

namespace App\Http\Controllers;

use App\Secciones;
use App\Trayectos;
use Illuminate\Http\Request;

class SeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secciones=Secciones::all();
        $trayectos=Trayectos::all();
        return view('admin.secciones.index', compact('secciones','trayectos'));
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
        $create=Secciones::create([
            'seccion'=>$request->seccion,
            'comentario'=>$request->comentario,
            'id_trayecto'=>$request->id_trayecto,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function show(Secciones $secciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Secciones $secciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secciones $secciones)
    {
        $secciones=Secciones::find($request->id);
        $secciones->seccion=$request->seccion;
        $secciones->comentario=$request->comentario;
        $secciones->id_trayecto=$request->id_trayecto;
        $secciones->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secciones  $secciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secciones $secciones, $id)
    {
        $secciones = Secciones::find($id);
        $secciones->delete();

        return redirect()->back();
    }
}
