<?php

namespace App\Http\Controllers;

use App\Rdv;
use App\Patient;
use App\Consultation;
use Illuminate\Http\Request;
use DB;


class RdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = DB::table('rdvs')
                -> join('patients' , 'patients.id' ,'=' , 'rdvs.patient_id')
                ->select ('rdvs.id','patients.nom' , 'patients.prenom' , 'rdvs.dateRdv' , 'rdvs.heure')
                ->orderBy('rdvs.heure' , 'desc')
                ->paginate();
        return view('rendez_vs.index' , compact('data'));        
    
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
    public function show($id)
    {
        $data = Rdv::findOrFail($id);
        return view('rendez_vs.show' , compact('data')); 
    }
    public function show2($id)
    {
        $consultation=Consultation::find($id);
        $rdvs  = DB::table('rdvs')
        ->where('patient_id', '=', $id)
        ->get();
         return view('rendez_vs.show2' , ["consultation" => $consultation, "rdvs" => $rdvs]);
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
