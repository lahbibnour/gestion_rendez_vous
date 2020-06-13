<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Patient;
use App\Rdv;
use App\User;
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
        $data = DB::table('consultations')
        ->join('rdvs' , 'rdvs.id' , '=' , 'consultations.rdv_id') 
        ->join('patients' , 'patients.id' , '=' ,'rdvs.patient_id')
        ->select('patients.nom' , 'patients.prenom' , 'consultations.patient_id' , 'rdvs.heure' , 'consultations.rdv_id' , 'consultations.id' , 'consultations.ordannance' , 'consultations.observation')
        ->get();

        return view('consultation.index' , compact('data'));
    }
    public function today()
    {
        
    }
    /* new function */

    

    //end new function

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consultation.create');
    }

    public function Consulter($patient_id , $rdv_id)
    {
            $patient =  Patient::findOrFail($patient_id);
            $rdv = Rdv::findOrFail($rdv_id);
            
            
            return view('consultation.create' ,[
                'patient'=>  $patient,
                'Rdv' =>$rdv
                
                
            ]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        $consultation = new Consultation;

        $consultation->patient_id = $request->patient_id ;
        $consultation->medecin_id = $request->medecin_id ;
        $consultation->rdv_id = $request->rdv_id ;
        $consultation->date = $request->date;
        $consultation->duree = $request->duree;
        $consultation->observation = $request->observation;
        $consultation->ordannance = $request->ordannance;


        $consultation->save();

        return redirect()->route('rendez_vs.index')->with('AddConsultation', 'Nouvelle Consultation Ajoutée avec succès');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $consultation=Consultation::find($id);
        $rdvs  = DB::table('rdvs')
        ->where('patient_id', '=', $id)
        ->get();
         return view('consultation.show' , ["consultation" => $consultation, "rdvs" => $rdvs]);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        return view('consultation.edit' , compact('consultation'));
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
       $validatedData = $request->validate($this->validationRules());
       $consultation->update('validatedData');
       return redirect()->route('consultation.show' , $consultation->id)->with('updateConsultation', ' Consultation updated successfully');

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

    private function validationRules()
    {
        return [
            'patient_id' => 'required' ,
            'medecin_id' => 'required' ,
            'rdv_id' => 'required' ,
            'date' => 'required' ,
            'duree' => 'required' ,
            'observation' => 'required',
            'ordannance' => 'required'

        ];
    }
}
