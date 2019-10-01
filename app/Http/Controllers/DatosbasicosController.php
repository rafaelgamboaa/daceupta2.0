<?php

namespace App\Http\Controllers;

use App\Datosbasicos;
use Illuminate\Http\Request;

class DatosbasicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosbasicos=Datosbasicos::all();
        return view('admin.datosbasicos.index', compact('datosbasicos'));
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
        $create=Datosbasicos::create([
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'nacio'=>$request->nacio,
            'cedula'=>$request->cedula,
            'pais_n'=>$request->pais_n,
            'genero'=>$request->genero,
            'fecha_nac'=>$request->fecha_nac,
            'id_municipio_nac'=>$request->id_municipio_nac,
            'edo_civil'=>$request->edo_civil,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'discapacidad'=>$request->discapacidad,
            'fecha_gradu'=>$request->fecha_gradu,
            'id_parroquia'=>$request->id_parroquia,
            'etnia'=>$request->etnia,
            'id_ciudad'=>$request->id_ciudad,
            'titulo_ob'=>$request->titulo_ob,
            'zona_postal'=>$request->zona_postal,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datosbasicos  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(Datosbasicos $datosbasicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datosbasicos  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Datosbasicos $datosbasicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datosbasicos  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datosbasicos $datosbasicos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datosbasicos  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datosbasicos $datosbasicos)
    {
        //
    }
}
