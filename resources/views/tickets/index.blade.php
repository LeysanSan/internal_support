@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Gestione Ticket</h1>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-hover mb-0">

                <thead>
                    <tr>
                        <th>Azienda</th>
                        <th>Titolo</th>
                        <th>Stato</th>
                        <th>Priorità</th>
                        <th>Aperto il</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($tickets as $ticket)
                        <tr>

                            <td>
                                {{ $ticket->company->name }}
                            </td>

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

                            <td>
                                @if ($ticket->priority === 'high')
                                    <span class="badge bg-danger">Alta</span>
                                @elseif($ticket->priority === 'medium')
                                    <span class="badge bg-warning text-dark">Media</span>
                                @else
                                    <span class="badge bg-success">Bassa</span>
                                @endif
                            </td>

                            <td>
                                {{ $ticket->created_at->format('d/m/Y H:i') }}
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

            <div class="mt-3">
                {{ $tickets->links() }}
            </div>
        @endsection
