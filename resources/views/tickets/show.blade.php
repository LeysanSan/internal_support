@extends('layouts.app')

@section('content')
    <h1>
        {{ $ticket->title }}</h1>

    <div class="card shadow-sm mb-4">
        <div class="card-body">


            <p><strong>Azienda:</strong> {{ $ticket->company->name }}</p>

            <p><strong>Cliente:</strong> {{ $ticket->client->full_name }}</p>

            <p><strong>Stato:</strong>
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
            </p>

            <p><strong>Priorità:</strong> {{ $ticket->priority }}</p>

            <p><strong>Descrizione:</strong> {{ $ticket->description }}</p>

            <h2>Cronologia Ticket</h2>

            <ul>
                @foreach ($ticket->messages as $message)
                    <li>
                        {{ $message->message }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
