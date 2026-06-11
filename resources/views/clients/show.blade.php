@extends('layouts.app')

@section('content')
    <h1>{{ $client->full_name }}</h1>

    <div class="card shadow-sm mb-4">
        <div class="card-body">

            <p><strong>Azienda:</strong> {{ $client->company->name }}</p>

            <p><strong>Telefono:</strong> {{ $client->phone }}</p>

            <p><strong>Email:</strong> {{ $client->email }}</p>

            <p><strong>Canale preferito:</strong> {{ $client->preferred_channel }}</p>

            <p><strong>Tipo connessione:</strong> {{ $client->connection_type }}</p>

            <h2>Storico Ticket</h2>

            <ul>
                @foreach ($client->tickets as $ticket)
                    <li>
                        <a href="/ticket/{{ $ticket->id }}">
                            {{ $ticket->title }}
                        </a>
                        ({{ $ticket->status }})
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
