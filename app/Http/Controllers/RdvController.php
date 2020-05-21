<?php

namespace App\Http\Controllers;

use App\Rdv;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rdv = Rdv::all();

        return view ('rendez_vs.index' , compact('Rdv'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function show(Rdv $rdv)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function edit(Rdv $rdv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rdv $rdv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rdv $rdv)
    {
        //
    }
}
