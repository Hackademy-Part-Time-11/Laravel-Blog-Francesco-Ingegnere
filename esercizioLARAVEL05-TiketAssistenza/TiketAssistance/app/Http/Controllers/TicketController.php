<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class TicketController extends Controller
{

    private $tickets = [];

    public function __construct()
    {
        $this->tickets = [
            1 => ['title' => 'Non funziona php', 'user_email' => 'example@info.it', 'status' => 'aperto', 'created_at' => '09/10/2023', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere iste id minus suscipit expedita voluptas et, ea repellendus aspernatur sed quos numquam voluptate hic cumque reiciendis qui velit ratione.'],
            2 => ['title' => 'Non funziona il caricamento immagine', 'user_email' => 'pippo@franco.it', 'status' => 'aperto', 'created_at' => '05/10/2023', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere iste id minus suscipit expedita voluptas et, ea repellendus aspernatur sed quos numquam voluptate hic cumque reiciendis qui velit ratione.'],
            3 => ['title' => "Non riesco a salvare l'articolo", 'user_email' => 'coso@cosi.it', 'status' => 'aperto', 'created_at' => '06/10/2023', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere iste id minus suscipit expedita voluptas et, ea repellendus aspernatur sed quos numquam voluptate hic cumque reiciendis qui velit ratione.'],
            4 => ['title' => 'Non parte node', 'user_email' => 'bianchi@example.com', 'status' => 'in lavorazione', 'created_at' => '01/10/2023', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere iste id minus suscipit expedita voluptas et, ea repellendus aspernatur sed quos numquam voluptate hic cumque reiciendis qui velit ratione.'],
            5 => ['title' => 'La pagina con l\'elenco degli articoli è vuota', 'user_email' => 'come@cose.com', 'status' => 'chiuso', 'created_at' => '25/09/2023', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facere iste id minus suscipit expedita voluptas et, ea repellendus aspernatur sed quos numquam voluptate hic cumque reiciendis qui velit ratione.'],
        ];
    }

    public function index() {
        $title = 'Elenco Tickets';
        return view('tickets', compact('title'),['tickets' => $this->tickets]);
    }

    public function show($id) {
        return view('ticket', ['ticket' => $this->tickets[$id], 'ticketId' => $id]);
    }

    public function sendMail(Request $request) {
        $ticket = $this->tickets[$request->ticket_id];

        Mail::to($ticket['user_email'])->send(new \App\Mail\Answer($request->message));

        return redirect()->back()->with(['success' => 'risposta inviata con successo']);
 
    }
}
