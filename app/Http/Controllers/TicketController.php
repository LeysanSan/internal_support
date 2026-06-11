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
    $tickets = Ticket::with('company')
        ->orderByRaw("
            CASE priority
                WHEN 'high' THEN 1
                WHEN 'medium' THEN 2
                WHEN 'low' THEN 3
            END
        ")
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('tickets.index', compact('tickets'));
}

public function byStatus($status)
{
    $tickets = Ticket::with('company')
        ->where('status', $status)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('tickets.index', compact('tickets'));
}
}

