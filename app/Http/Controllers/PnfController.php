<?php

namespace App\Http\Controllers;

use App\Pnf;
use Illuminate\Http\Request;

class PnfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $create=Pnf::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function show(Pnf $pnf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function edit(Pnf $pnf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pnf $pnf)
    {
        //dd($request->all());
        $pnf=Pnf::find($request->id2);
        $pnf->codigo=$request->codigo;
        $pnf->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pnf $pnf, $id)
    {
        $pnf = Pnf::find($id);
        $pnf->delete();

        return redirect()->back();
    }
}
