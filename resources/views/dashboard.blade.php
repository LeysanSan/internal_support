@extends('layouts.app')

@section('content')
    <h1 class="mb-1">Dashboard</h1>

    <p class="text-muted mb-4">
        Benvenuto nel Portale Assistenza
    </p>

    {{-- Navigation --}}

    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">
            <a href="/aziende" class="text-decoration-none text-dark">
                <div class="card shadow-sm card-hover h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-buildings fs-1 text-primary"></i>

                        <h5 class="mt-3">Account</h5>

                        <h2>{{ $companiesCount }}</h2>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="/clienti" class="text-decoration-none text-dark">
                <div class="card shadow-sm card-hover h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-people fs-1 text-success"></i>

                        <h5 class="mt-3">Contatti</h5>

                        <h2>{{ $clientsCount }}</h2>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card shadow-sm card-hover h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-pc-display fs-1 text-warning"></i>

                        <h5 class="mt-3">Workplace</h5>

                        <h2>25</h2>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="/tickets" class="text-decoration-none text-dark">
                <div class="card shadow-sm card-hover h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-ticket-detailed fs-1 text-danger"></i>

                        <h5 class="mt-3">Ticket</h5>

                        <h2>{{ $ticketsCount }}</h2>

                    </div>
                </div>
            </a>
        </div>

    </div>


    {{-- KPI --}}

    <div class="row g-4 mb-4">

        <div class="col-lg-3 col-md-6">
            <a href="/tickets/status/open" class="text-decoration-none text-dark">
                <div class="card border-start border-danger border-4 shadow-sm h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-exclamation-circle fs-1 text-danger"></i>

                        <h6 class="mt-3 text-muted">Ticket Aperti</h6>

                        <h2>{{ $openTickets }}</h2>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="/tickets/status/in_progress" class="text-decoration-none text-dark">
                <div class="card border-start border-warning border-4 shadow-sm h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-hourglass-split fs-1 text-warning"></i>

                        <h6 class="mt-3 text-muted">In Lavorazione</h6>

                        <h2>{{ $inProgressTickets }}</h2>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="/tickets/status/closed" class="text-decoration-none text-dark">
                <div class="card border-start border-success border-4 shadow-sm h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-check-circle fs-1 text-success"></i>

                        <h6 class="mt-3 text-muted">Chiusi</h6>

                        <h2>{{ $closedTickets }}</h2>

                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="/tickets/status/lost" class="text-decoration-none text-dark">
                <div class="card border-start border-secondary border-4 shadow-sm h-100">
                    <div class="card-body text-center">

                        <i class="bi bi-x-circle fs-1 text-secondary"></i>

                        <h6 class="mt-3 text-muted">Persi</h6>

                        <h2>{{ $lostTickets }}</h2>

                    </div>
                </div>
            </a>
        </div>

    </div>


    {{-- Recent Tickets --}}

    <div class="card shadow-sm mb-4">

        <div class="card-header">
            <i class="bi bi-ticket-detailed"></i>
            Ultimi Ticket
        </div>

        <div class="card-body">

            <table class="table table-hover">

                <thead>

                    <tr>

                        <th>Azienda</th>
                        <th>Titolo</th>
                        <th>Priorità</th>
                        <th>Stato</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($latestTickets as $ticket)
                        <tr>

                            <td>{{ $ticket->company->name }}</td>

                            <td>
                                <a href="/ticket/{{ $ticket->id }}">
                                    {{ $ticket->title }}
                                </a>
                            </td>

                            <td>

                                @if ($ticket->priority == 'high')
                                    <span class="badge bg-danger">Alta</span>
                                @elseif($ticket->priority == 'medium')
                                    <span class="badge bg-warning text-dark">Media</span>
                                @else
                                    <span class="badge bg-success">Bassa</span>
                                @endif

                            </td>

                            <td>

                                @if ($ticket->status == 'open')
                                    <span class="badge bg-danger">Aperto</span>
                                @elseif($ticket->status == 'in_progress')
                                    <span class="badge bg-warning text-dark">In lavorazione</span>
                                @elseif($ticket->status == 'closed')
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


    <div class="row g-4">

        <div class="col-lg-6">

            <div class="card shadow-sm h-100">

                <div class="card-header">

                    <i class="bi bi-list-check"></i>

                    Le Mie Attività

                </div>

                <div class="card-body">

                    <ul class="list-group">

                        <li class="list-group-item">☐ Controllare VPN</li>

                        <li class="list-group-item">☐ Installare stampante</li>

                        <li class="list-group-item">☐ Aggiornare Workplace</li>

                        <li class="list-group-item">☑ Chiamare Mario Rossi</li>

                    </ul>

                </div>

            </div>

        </div>


        <div class="col-lg-6">

            <div class="card shadow-sm h-100">

                <div class="card-header">

                    <i class="bi bi-pc-display"></i>

                    Apparecchiature

                </div>

                <div class="card-body">

                    <div class="row text-center">

                        <div class="col">
                            <i class="bi bi-pc-display fs-2 text-primary"></i>
                            <h4>126</h4>
                            <small>PC</small>
                        </div>

                        <div class="col">
                            <i class="bi bi-printer fs-2 text-secondary"></i>
                            <h4>31</h4>
                            <small>Stampanti</small>
                        </div>

                        <div class="col">
                            <i class="bi bi-router fs-2 text-success"></i>
                            <h4>18</h4>
                            <small>Network</small>
                        </div>

                        <div class="col">
                            <i class="bi bi-telephone fs-2 text-warning"></i>
                            <h4>22</h4>
                            <small>VoIP</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
