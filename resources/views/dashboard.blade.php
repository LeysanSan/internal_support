@extends('layouts.app')

@section('content')
    <div class="mb-5">
        <h1>Panoramica Generale</h1>

    </div>



    <div class="row g-3">

        <div class="col-md-3">
            <a href="/aziende" class="text-decoration-none text-dark">
                <div class="card border-primary shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>Aziende</h5>
                        <h2>{{ $companiesCount }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/clienti" class="text-decoration-none text-dark">
                <div class="card border-info shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>Clienti</h5>
                        <h2>{{ $clientsCount }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/tickets" class="text-decoration-none text-dark">
                <div class="card border-dark shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>Ticket Totali</h5>
                        <h2>{{ $ticketsCount }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3">
            <a href="/tickets/status/open" class="text-decoration-none text-dark">
                <div class="card border-danger shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>Aperti</h5>
                        <h2>{{ $openTickets }}</h2>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="row g-3 mt-2">

        <div class="col-md-4">
            <a href="/tickets/status/in_progress" class="text-decoration-none text-dark">
                <div class="card border-warning shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>In Lavorazione</h5>
                        <h2>{{ $inProgressTickets }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/tickets/status/closed" class="text-decoration-none text-dark">
                <div class="card border-success shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>Chiusi</h5>
                        <h2>{{ $closedTickets }}</h2>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/tickets/status/lost" class="text-decoration-none text-dark">
                <div class="card border-secondary shadow-sm card-hover text-center">
                    <div class="card-body">
                        <h5>Persi</h5>
                        <h2>{{ $lostTickets }}</h2>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="card shadow-sm mt-5">

        <div class="card-body">

            <h4>Ultimi Ticket</h4>

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

                                @if ($ticket->priority === 'high')
                                    <span class="badge bg-danger">Alta</span>
                                @elseif($ticket->priority === 'medium')
                                    <span class="badge bg-warning text-dark">Media</span>
                                @else
                                    <span class="badge bg-success">Bassa</span>
                                @endif

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
@endsection
