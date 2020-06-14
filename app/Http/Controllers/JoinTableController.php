<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinTableController extends Controller
{
    

    public function show($id)
    {
        $data = DB::findOrFail($id);
        return view('rendez_vs.show');
    }

}
