<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'message' => 'required' 
        ]);

        Mail::to('test@test.com')->send( new ContactMail());
    }
}
