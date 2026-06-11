<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
{
    $clients = Client::with('company')->paginate(10);

    return view('clients.index', compact('clients'));
}
 public function show($id)
    {
        $client = Client::with([
            'company',
            'tickets'
        ])->findOrFail($id);

        return view('clients.show', compact('client'));
    }

}
