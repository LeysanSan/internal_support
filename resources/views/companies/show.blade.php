@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>{{ $company->name }}</h1>
            <p class="text-muted mb-0">
                Account #{{ $company->id }}
            </p>
        </div>

        <a href="/aziende" class="btn btn-outline-secondary">
            ← Torna alle Aziende
        </a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <h5 class="mb-3">Statistiche</h5>

            <div class="d-flex flex-wrap gap-2">

                <span class="badge bg-primary p-2">
                    Clienti {{ $company->clients->count() }}
                </span>

                <span class="badge bg-dark p-2">
                    Ticket {{ $company->tickets->count() }}
                </span>

                <a href="/aziende/{{ $company->id }}?status=open" class="badge bg-danger text-decoration-none p-2">
                    Aperti {{ $openTickets }}
                </a>

                <a href="/aziende/{{ $company->id }}?status=in_progress"
                    class="badge bg-warning text-dark text-decoration-none p-2">
                    In lavorazione {{ $inProgressTickets }}
                </a>

                <a href="/aziende/{{ $company->id }}?status=closed" class="badge bg-success text-decoration-none p-2">
                    Chiusi {{ $closedTickets }}
                </a>

                <a href="/aziende/{{ $company->id }}?status=lost" class="badge bg-secondary text-decoration-none p-2">
                    Persi {{ $lostTickets }}
                </a>

            </div>

        </div>
    </div>


    <div class="row">

        <!-- LEFT COLUMN -->

        <div class="col-lg-3">

            <div class="card shadow-sm mb-3">

                <div class="card-header bg-primary text-white">
                    <i class="bi bi-geo-alt"></i>
                    Siti
                </div>

                <div class="list-group list-group-flush">

                    <a href="/sites/1" class="list-group-item list-group-item-action">
                        Palermo
                    </a>

                    <a href="/sites/2" class="list-group-item list-group-item-action">
                        Roma
                    </a>

                    <a href="/sites/3" class="list-group-item list-group-item-action">
                        Milano
                    </a>

                </div>

            </div>


            <div class="card shadow-sm">

                <div class="card-header bg-dark text-white">
                    <i class="bi bi-building"></i>
                    Uffici
                </div>

                <div class="list-group list-group-flush">

                    <a href="#" class="list-group-item">
                        Marketing
                    </a>

                    <a href="#" class="list-group-item">
                        Vendite
                    </a>

                    <a href="#" class="list-group-item">
                        Supporto
                    </a>

                </div>

            </div>

        </div>


        <!-- CENTER -->

        <div class="col-lg-6">

            <div class="card shadow-sm">

                <div class="card-header">
                    <strong>Ticket Recenti</strong>
                </div>

                <div class="card-body">

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

                                        @if ($ticket->status == 'open')
                                            <span class="badge bg-danger">Aperto</span>
                                        @elseif($ticket->status == 'in_progress')
                                            <span class="badge bg-warning text-dark">
                                                In lavorazione
                                            </span>
                                        @elseif($ticket->status == 'closed')
                                            <span class="badge bg-success">
                                                Chiuso
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">
                                                Perso
                                            </span>
                                        @endif

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                    {{ $tickets->links() }}

                </div>

            </div>

        </div>


        <!-- RIGHT COLUMN -->

        <div class="col-lg-3">

            <div class="card shadow-sm">

                <div class="card-header bg-success text-white">
                    <i class="bi bi-pc-display"></i>
                    Dispositivi
                </div>

                <div class="list-group list-group-flush">

                    <a href="#" class="list-group-item d-flex justify-content-between">
                        <span>💻 PC</span>
                        <span class="badge bg-primary">18</span>
                    </a>

                    <a href="#" class="list-group-item d-flex justify-content-between">
                        <span>🖨 Stampanti</span>
                        <span class="badge bg-primary">6</span>
                    </a>

                    <a href="#" class="list-group-item d-flex justify-content-between">
                        <span>🖥 Server</span>
                        <span class="badge bg-primary">2</span>
                    </a>

                    <a href="#" class="list-group-item d-flex justify-content-between">
                        <span>🌐 Network</span>
                        <span class="badge bg-primary">5</span>
                    </a>

                    <a href="#" class="list-group-item d-flex justify-content-between">
                        <span>☎ VoIP</span>
                        <span class="badge bg-primary">12</span>
                    </a>

                </div>

            </div>

        </div>

    </div>
@endsection
