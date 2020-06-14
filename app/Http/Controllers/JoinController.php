<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function getRdv(){
        $data  = DB::table('rdvs')
        ->join('patients', 'rdvs.patient_id', '=', 'patients.id')
        ->get();
        return view('patient.show' , compact('data'));
    }
}
