<h1>{{ $ticket->title }}</h1>

<p><strong>Azienda:</strong> {{ $ticket->company->name }}</p>

<p><strong>Cliente:</strong> {{ $ticket->client->full_name }}</p>

<p><strong>Stato:</strong> {{ $ticket->status }}</p>

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
