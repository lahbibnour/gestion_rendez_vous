<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RdvController extends Controller
{
    public function today()
    {
        $todayRdv = Rdv::where('dateRdv' , date('Y-m-d'))->get();
        dd($todayRdv);
    }
}
