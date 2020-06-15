<?php

namespace App\Http\Controllers;

use App\Rdv;
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
        return view('patient.show');
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
    $rdv = new Rdv;
          $rdv->patient_id=$request->patient_id;
          $rdv->dateRdv = $request->dateRdv;
          $rdv->heure= $request->heure;
          $rdv->save();
    
         return redirect()->route('patient.show',$rdv->patient_id)->with('AjouterRdv', 'Nouveau Rdv a été pris');
         dd($request);
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function edit(Rdv $rdv)
    {
        return view('rdv.edit', compact('rdv'));

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
        $validatedData = $request->validate($this->validationRules());

        $rdv->update($validatedData);

        return redirect()->route('patient.show', $rdv->id)->with('updateRdv', 'rendez-vous a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rdv $rdv)
    {
        if($rdv != null){
        $rdv->delete();

        return redirect()->route('patient.show' , $rdv->patient_id)->with('deleteRdv', 'le RDV a été bien supprimé');
    }
}
    private function validationRules()
    {
        return [
            
            'heure' => 'required',
            'dateRdv' => 'required',
        ];
    }
}