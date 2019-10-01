<?php

namespace App\Http\Controllers;

use App\Departamentos;
use Illuminate\Http\Request;
use App\Pnf;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=Departamentos::all();
        $pnf=Pnf::all();
        return view('admin.departamentos.index', compact('departamentos','pnf'));
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
        $create=Departamentos::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function show(Departamentos $departamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamentos $departamentos)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamentos $departamentos)
    {
         //dd($departamentos);
         $departamentos=Departamentos::find($request->id);
         $departamentos->codigo=$request->codigo;
         $departamentos->departamento=$request->departamento;
         $departamentos->save();
 
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamentos  $departamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamentos $departamentos, $id)
    {
        $departamentos = Departamentos::find($id);
        $departamentos->delete();

        return redirect()->back();
    }
}
