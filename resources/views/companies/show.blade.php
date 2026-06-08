<h1>{{ $company->name }}</h1>

<p>ID: {{ $company->id }}</p>

<h2>Statistiche</h2>

<ul>
    <li>Clienti registrati: {{ $company->clients->count() }}</li>
    <li>Ticket totali: {{ $company->tickets->count() }}</li>
    <li>Ticket aperti: {{ $openTickets }}</li>
    <li>Ticket chiusi: {{ $closedTickets }}</li>
    <li>Ticket in lavorazione: {{ $inProgressTickets }}</li>
    <li>Ticket persi: {{ $lostTickets }}</li>
</ul>

<h2>Clienti</h2>

<ul>
    @foreach ($company->clients as $client)
        <li>
            <a href="/clienti/{{ $client->id }}">
                {{ $client->full_name }}
            </a>
        </li>
    @endforeach
</ul>

<h2>Ticket</h2>

<ul>
    @foreach ($company->tickets as $ticket)
        <li>
            <a href="/ticket/{{ $ticket->id }}">
                {{ $ticket->title }}
            </a>
            ({{ $ticket->status }})
        </li>
    @endforeach
</ul>
