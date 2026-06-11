<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Client;
use App\Models\Ticket;

class CompanyController extends Controller

{
public function index()
{
    $companies = Company::withCount([
        'tickets as open_tickets_count' => function ($query) {
            $query->where('status', 'open');
        }
    ])->paginate(10);

    return view('companies.index', compact('companies'));
}

public function show($id, Request $request)
{
    $company = Company::findOrFail($id);

    $status = $request->query('status');

    $ticketsQuery = Ticket::where('company_id', $id);

    if ($status) {
        $ticketsQuery->where('status', $status);
    }

    $tickets = $ticketsQuery->latest()->paginate(5);

    $openTickets = Ticket::where('company_id', $id)->where('status', 'open')->count();
    $inProgressTickets = Ticket::where('company_id', $id)->where('status', 'in_progress')->count();
    $closedTickets = Ticket::where('company_id', $id)->where('status', 'closed')->count();
    $lostTickets = Ticket::where('company_id', $id)->where('status', 'lost')->count();

    return view('companies.show', compact(
        'company',
        'tickets',
        'openTickets',
        'inProgressTickets',
        'closedTickets',
        'lostTickets'
    ));

}
}
