<?php

namespace App\Http\Controllers;

use App\personal_has_asignatura;
use Illuminate\Http\Request;
use App\Datosbasicos_Docente;
use App\Materias;
use App\Sede;
use App\Turnos;
use App\Secciones;
use App\Periodos;

class PersonalHasAsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal=personal_has_asignatura::all();
        $docente=Datosbasicos_Docente::all();
        $materias=Materias::all();
        $sede=Sede::all();
        $turno=Turnos::all();
        $seccion=Secciones::all();
        $periodos=Periodos::all();
        return view('admin.personal.index', compact('personal','docente','materias','sede','turno','seccion','periodos'));
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
         $create=personal_has_asignatura::create($request->all());
         $create=personal_has_asignatura::create([
             'id_docente'=>$request->id_docente,
             'id_materias'=>$request->id_materias,
             'id_sede'=>$request->id_sede,
             'id_turno'=>$request->id_turno,
             'id_seccion'=>$request->id_seccion,
             'id_periodo'=>$request->id_periodo,
             'status'=>'si'
         ]);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personal_has_asignatura  $personal_has_asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(personal_has_asignatura $personal_has_asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personal_has_asignatura  $personal_has_asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(personal_has_asignatura $personal_has_asignatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personal_has_asignatura  $personal_has_asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personal_has_asignatura $personal_has_asignatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personal_has_asignatura  $personal_has_asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(personal_has_asignatura $personal_has_asignatura)
    {
        //
    }
}
