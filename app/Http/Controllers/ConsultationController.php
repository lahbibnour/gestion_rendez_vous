<?php

namespace App\Http\Controllers;

use App\Consultation;
use Illuminate\Http\Request;
use DB;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //30/05/2020 test
       $info= DB::table('consultations')
                    ->whereExists(function($query)
                    {
                        $query->select(DB::raw(1))
                              ->from('rdvs')
                              ->whereRaw('consultations.patient_id = rdvs.patient_id');
                    })
                    ->get();
                    return view('consultation.index' , compact('info')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consultation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required' ,
            'medecin_id' => 'required' ,
            'rdv_id' => 'required' ,
            'date' => 'required' ,
            'duree' => 'required' ,
            'observation' => 'required',
            'ordannance' => 'required'

        ]);

        $consultation = new Consultation;

        $consultation->patient_id = $request->patient_id ;
        $consultation->medecin_id = $request->medecin_id ;
        $consultation->rdv_id = $request->rdv_id ;
        $consultation->date = $request->date;
        $consultation->duree = $request->duree;
        $consultation->observation = $request->observation;
        $consultation->ordannance = $request->ordannance;


        $consultation->save();

        return redirect()->route('rendez_vs.index')->with('AddConsultation', 'New Consultation Added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $data = Consultation::findOrFail($id);
        return view('consultation.show' , compact('data'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
