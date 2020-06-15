<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Rdv;
use Illuminate\Http\Request;
use DB;
class PatientController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('patient.create');
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
       $patient = new Patient;
       $patient->nom = $request->nom;
       $patient->prenom = $request->prenom;
       $patient->age = $request->age;
       $patient->num_tel = $request->num_tel;
       $patient->email = $request->email;
       $patient->etat = $request->etat;
       $patient->sexe = $request->sexe;
       $patient->save();
       //dd($request);
       return redirect()->route('patient.index')->with('AjouterPatient', 'Nouveau patient a été ajouté');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $patient=Patient::find($id);
        $rdvs  = DB::table('rdvs')
        ->where('patient_id', '=', $id)
        ->get();
         return view('patient.show' , ["patient" => $patient, "rdvs" => $rdvs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate($this->validationRules());

        $patient->update($validatedData);

        return redirect()->route('patient.index', $patient->id)->with('updatePatient', 'patient a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patient.index')->with('deletePatient', 'le patient a été bien supprimé');
    }
    private function validationRules()
    {
        return ['nom' => 'required',
        'prenom' => 'required',
        'age' => 'required',
        'num_tel' => 'required',
        'email' => 'required',
        'etat' => 'required',
        'sexe' => 'required',
        ];
    }
}