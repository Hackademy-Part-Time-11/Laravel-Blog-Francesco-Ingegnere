<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function showForm() {
        return view('pages.contacts');
    }

    public function send (Request $request) {

        $request->inputName;
        $request->inputEmail;
        $request->inputMessage;

        if($request->inputName == '') {
            return redirect()->back()->with(['errorName' => 'In campo Nome Utente è obbligatorio']);
        }

        return redirect()->route('contacts')->with(['success' => 'Messaggio inviato']);
    }
}
