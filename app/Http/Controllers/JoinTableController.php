<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinTableController extends Controller
{
    public function index()
    {
        $data = DB::table('rdvs')
                -> join('patients' , 'patients.id' ,'=' , 'rdvs.patient_id')
                ->select ('rdvs.id','patients.nom' , 'patients.prenom' , 'rdvs.dateRdv' , 'rdvs.heure')
                ->paginate();
        return view('join_table' , compact('data'));        
    }
}
