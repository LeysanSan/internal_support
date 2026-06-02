<h1>{{ $company->name }}</h1>

<p>ID: {{ $company->id }}</p>


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
            {{ $ticket->title }}
            ({{ $ticket->status }})
        </li>
    @endforeach
</ul>
