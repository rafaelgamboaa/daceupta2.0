<?php

namespace App\Http\Controllers;

use App\Areas;
use App\Dedicacion;
use App\Carreras;
use App\Datosbasicos_docente;
use Illuminate\Http\Request;

class DatosbasicosDocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docente=Datosbasicos_docente::all();
        $carreras=Carreras::all();
        $areas=Areas::all();
        $dedicacion=Dedicacion::all();
        return view('admin.docentes.index', compact('docente','carreras','areas','dedicacion'));
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
        $create=Datosbasicos_docente::create($request->all());
        $create=Datosbasicos_docente::create([
            'nacio'=>$request->nacio,
            'cedula'=>$request->cedula,
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'telefono'=>$request->telefono,
            'direccion'=>$request->direccion,
            'correo'=>$request->correo,
            'id_area'=>$request->id_area,
            'id_dedicacion'=>$request->id_dedicacion,
            'id_carrera'=>$request->id_carrera,
            'status'=>'si'
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datosbasicos_docente  $datosbasicos_docente
     * @return \Illuminate\Http\Response
     */
    public function show(Datosbasicos_docente $datosbasicos_docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datosbasicos_docente  $datosbasicos_docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Datosbasicos_docente $datosbasicos_docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datosbasicos_docente  $datosbasicos_docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datosbasicos_docente $datosbasicos_docente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datosbasicos_docente  $datosbasicos_docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datosbasicos_docente $datosbasicos_docente)
    {
        //
    }
}
