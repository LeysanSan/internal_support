@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Dashboard Supporto</h1>

    <div class="row g-3">

        <div class="col-md-3">
            <a href="/aziende" class="text-decoration-none">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Aziende</h5>
                        <h2>{{ $companiesCount }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/clienti" class="text-decoration-none">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Clienti</h5>
                        <h2>{{ $clientsCount }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/tickets" class="text-decoration-none">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Ticket Totali</h5>
                        <h2>{{ $ticketsCount }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Aperti</h5>
                    <h2>{{ $openTickets }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-3 mt-2">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>In Lavorazione</h5>
                    <h2>{{ $inProgressTickets }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Chiusi</h5>
                    <h2>{{ $closedTickets }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Persi</h5>
                    <h2>{{ $lostTickets }}</h2>
                </div>
            </div>
        </div>

    </div>


    <h2 class="mt-5">Ultimi Ticket</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Stato</th>
                <th>Priorità</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($latestTickets as $ticket)
                <tr>
                    <td>
                        <a href="/ticket/{{ $ticket->id }}">
                            {{ $ticket->title }}
                        </a>
                    </td>

                    <td>
                        <span class="badge bg-secondary">
                            {{ $ticket->status }}
                        </span>
                    </td>

                    <td>
                        <span class="badge bg-warning text-dark">
                            {{ $ticket->priority }}
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
