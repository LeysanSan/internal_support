<h1>{{ $company->name }}</h1>

<p>ID: {{ $company->id }}</p>

<h2>Statistiche</h2>

<ul>
    <li>Ticket aperti: {{ $openTickets }}</li>
    <li>Ticket chiusi: {{ $closedTickets }}</li>
    <li>Ticket in lavorazione: {{ $inProgressTickets }}</li>
    <li>Ticket persi: {{ $lostTickets }}</li>
</ul>

<h2>Clienti</h2>

<ul>
    @foreach ($company->clients as $client)
        <li>{{ $client->full_name }}</li>
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
