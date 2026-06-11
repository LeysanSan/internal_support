@extends('layouts.app')

@section('content')
    <h1>{{ $company->name }}</h1>

    <p>ID: {{ $company->id }}</p>

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <h2>Statistiche</h2>

            <div class="d-flex gap-2 flex-wrap">

                <a href="/aziende/{{ $company->id }}" class="text-decoration-none">

                    <span class="badge bg-primary">
                        Clienti: {{ $company->clients->count() }}
                    </span>

                </a>

                <a href="/aziende/{{ $company->id }}" class="text-decoration-none">

                    <span class="badge bg-dark">
                        Ticket: {{ $company->tickets->count() }}
                    </span>

                </a>

                <a href="/aziende/{{ $company->id }}?status=open" class="text-decoration-none">

                    <span class="badge bg-danger">
                        Aperti: {{ $openTickets }}
                    </span>

                </a>

                <a href="/aziende/{{ $company->id }}?status=in_progress" class="text-decoration-none">

                    <span class="badge bg-warning text-dark">
                        In lavorazione: {{ $inProgressTickets }}
                    </span>

                </a>

                <a href="/aziende/{{ $company->id }}?status=closed" class="text-decoration-none">

                    <span class="badge bg-success">
                        Chiusi: {{ $closedTickets }}
                    </span>

                </a>

                <a href="/aziende/{{ $company->id }}?status=lost" class="text-decoration-none">

                    <span class="badge bg-secondary">
                        Persi: {{ $lostTickets }}
                    </span>

                </a>

            </div>

            <h2 class="mt-4">Clienti</h2>

            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Profilo</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($company->clients as $client)
                        <tr>

                            <td>{{ $client->full_name }}</td>

                            <td>
                                <a href="/clienti/{{ $client->id }}">
                                    Apri
                                </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

            <h2 class="mt-4">Ticket</h2>

            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>Titolo</th>
                        <th>Stato</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($tickets as $ticket)
                        <tr>

                            <td>
                                <a href="/ticket/{{ $ticket->id }}">
                                    {{ $ticket->title }}
                                </a>
                            </td>

                            <td>

                                @if ($ticket->status === 'open')
                                    <span class="badge bg-danger">Aperto</span>
                                @elseif ($ticket->status === 'in_progress')
                                    <span class="badge bg-warning text-dark">
                                        In lavorazione
                                    </span>
                                @elseif ($ticket->status === 'closed')
                                    <span class="badge bg-success">Chiuso</span>
                                @else
                                    <span class="badge bg-secondary">Perso</span>
                                @endif

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
@endsection
