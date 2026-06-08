<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Client;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index()
    {
        $companiesCount = Company::count();

        $clientsCount = Client::count();

        $ticketsCount = Ticket::count();

        $openTickets = Ticket::where('status', 'open')
            ->count();

        $closedTickets = Ticket::where('status', 'closed')
            ->count();

        $inProgressTickets = Ticket::where('status', 'in_progress')
            ->count();

        $lostTickets = Ticket::where('status', 'lost')
            ->count();

        $latestTickets = Ticket::latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'companiesCount',
            'clientsCount',
            'ticketsCount',
            'openTickets',
            'closedTickets',
            'inProgressTickets',
            'lostTickets',
            'latestTickets'
        ));
    }
}