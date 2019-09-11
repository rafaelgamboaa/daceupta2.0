<?php

namespace App\Http\Controllers;

use App\Periodos;
use Illuminate\Http\Request;

class PeriodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos=Periodos::all();
        return view('admin.periodos.index', compact('periodos'));
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
        $create=Periodos::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function show(Periodos $periodos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodos $periodos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodos $periodos)
    {
        $periodos=Periodos::find($request->id);
        $periodos->periodo=$request->periodo;
        $periodos->trimestre=$request->trimestre;
        $periodos->status=$request->status;
        $periodos->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodos $periodos, $id)
    {
        $periodos = Periodos::find($id);
        $periodos->delete();

        return redirect()->back();
    }
}
