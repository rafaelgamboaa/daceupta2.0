<?php

namespace App\Http\Controllers;

use App\Trayectos;
use Illuminate\Http\Request;
use App\Carreras;

class TrayectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trayectos=Trayectos::all();
        $carreras=Carreras::all();
        return view('admin.trayectos.index', compact('trayectos','carreras'));
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
        //dd($request->all());
        //$create=Carreras::create($request->all());
        $create=Trayectos::create([
            'trayecto'=>$request->trayecto,
            'id_carrera'=>$request->id_carrera,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trayectos  $trayectos
     * @return \Illuminate\Http\Response
     */
    public function show(Trayectos $trayectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trayectos  $trayectos
     * @return \Illuminate\Http\Response
     */
    public function edit(Trayectos $trayectos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trayectos  $trayectos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trayectos $trayectos)
    {
        $trayectos=Trayectos::find($request->id);
        $trayectos->trayecto=$request->trayecto;
        $trayectos->id_carrera=$request->id_carrera;
        $trayectos->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trayectos  $trayectos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trayectos $trayectos, $id)
    {
        $trayectos = Trayectos::find($id);
        $trayectos->delete();

        return redirect()->back();
    }
}
