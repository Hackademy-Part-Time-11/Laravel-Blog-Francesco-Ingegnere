<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function showForm() {
        return view('pages.contacts');
    }

    public function send (Request $request) {

        if($request->inputName == '') {
            return redirect()->back()->with(['errorName' => 'In campo Nome Utente è obbligatorio']);
        }elseif($request->inputEmail == ''){
            return redirect()->back()->with(['errorEmail' => 'In campo Email è obbligatorio']);
        }elseif($request->inputMessage == ''){
            return redirect()->back()->with(['errorMessage' => 'In campo Messaggio è obbligatorio']);
        }

        Mail::to('admin@example.com')->send(new Contact(
            $request->inputName,
            $request->inputEmail,
            $request->inputMessage,
        ));

        return redirect()->route('contacts')->with(['success' => 'Messaggio inviato']);
    }
}
