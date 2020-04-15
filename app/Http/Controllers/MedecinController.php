<?php

namespace App\Http\Controllers;

use App\Medecin;
use Illuminate\Http\Request;
use App\User;

class MedecinController extends Controller
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

    public function test()
    {
     
    if (user()->admin ==0)
        return view('medecin');
    
        }

        /*
        public function deleteCharacter ($char_delete_id)
{
    if (Auth::user()->id == $delCharacterUserID) {
        $deleteSuccess = 1;

    } else {
        $deleteSuccess = 0;
    }
    return redirect('/characters')->with('deleteSuccess', $deleteSuccess);
}
        */

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
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(Medecin $medecin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function edit(Medecin $medecin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medecin $medecin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medecin $medecin)
    {
        //
    }
}
