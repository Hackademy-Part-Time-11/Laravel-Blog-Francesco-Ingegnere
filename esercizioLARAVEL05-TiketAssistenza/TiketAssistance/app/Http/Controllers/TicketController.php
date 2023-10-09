<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{

    private $tickets = [];

    public function __construct()
    {
        $this->tickets = [
            1 => ['title' => 'Non funziona php', 'user_email' => 'example@info.it', 'status' => 'aperto', 'created_at' => '09/10/2023', 'description' => '...'],
            2 => ['title' => 'Non funziona il caricamento immagine', 'user_email' => 'pippo@franco.it', 'status' => 'aperto', 'created_at' => '05/10/2023', 'description' => '...'],
            3 => ['title' => "Non riesco a salvare l'articolo", 'user_email' => 'coso@cosi.it', 'status' => 'aperto', 'created_at' => '06/10/2023', 'description' => '...'],
            4 => ['title' => 'Non parte node', 'user_email' => 'bianchi@example.com', 'status' => 'in lavorazione', 'created_at' => '01/10/2023', 'description' => '...'],
            5 => ['title' => 'La pagina con l\'elenco degli articoli è vuota', 'user_email' => 'come@cose.com', 'status' => 'chiuso', 'created_at' => '25/09/2023', 'description' => '...'],
        ];
    }

    public function index() {
        $title = 'Elenco Tickets';
        return view('tickets', compact('title'),['tickets' => $this->tickets]);
    }
}
