<h1>Ticket</h1>

@extends('layouts.app')

@section('content')
    <h1>Ticket</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Stato</th>
                <th>Priorità</th>
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

                    <td>{{ $ticket->status }}</td>

                    <td>{{ $ticket->priority }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
