<?php

namespace App\Http\Controllers;

use App\Carreras;
use Illuminate\Http\Request;
use App\Departamentos;
use App\Pnf;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras=Carreras::all();
        $departamentos=Departamentos::all();
        $pnf=Pnf::all();
        return view('admin.carreras.index', compact('carreras','departamentos','pnf'));
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
        $create=Carreras::create($request->all());
        $create=Carreras::create([
            'codigo'=>$request->codigo,
            'carrera'=>$request->carrera,
            'id_departamento'=>$request->id_departamento,
            'id_pnf'=>$request->id_pnf,
            'status'=>'si'
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function show(Carreras $carreras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function edit(Carreras $carreras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carreras $carreras)
    {
        $carreras=Carreras::find($request->id);
        $carreras->codigo=$request->codigo;
        $carreras->carrera=$request->carrera;
        $carreras->id_departamento=$request->id_departamento;
        $carreras->id_pnf=$request->id_pnf;
        $carreras->status= 'si';
        $carreras->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carreras $carreras, $id)
    {
        $carreras = Carreras::find($id);
        $carreras->delete();

        return redirect()->back();
    }
}
