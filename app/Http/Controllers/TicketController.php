<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function show($id)
    {
        $ticket = Ticket::with([
            'client',
            'company',
            'messages'
        ])->findOrFail($id);

        return view('tickets.show', compact('ticket'));
    }
    public function index()
{
    $tickets = Ticket::all();

    return view('tickets.index', compact('tickets'));
}
}

