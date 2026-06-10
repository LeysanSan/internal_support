<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller

{
public function index()
{
 $companies = Company::withCount('tickets')->get();
    return view('companies.index', compact('companies'));
}

public function show($id)
{
    $company = Company::with(['clients', 'tickets'])
        ->findOrFail($id);

    $openTickets = $company->tickets
        ->where('status', 'open')
        ->count();

    $closedTickets = $company->tickets
        ->where('status', 'closed')
        ->count();

    $inProgressTickets = $company->tickets
        ->where('status', 'in_progress')
        ->count();

    $lostTickets = $company->tickets
        ->where('status', 'lost')
        ->count();

    return view('companies.show', compact(
        'company',
        'openTickets',
        'closedTickets',
        'inProgressTickets',
        'lostTickets'
    ));
}
}