@extends('layouts.app')

@section('content')
    <title>Gestione Clienti</title>

    <h1 class="mb-4">Gestione Clienti</h1>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Azienda</th>
                        <th>Metodo</th>
                        <th>Contatto</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($clients as $client)
                        <tr>

                            <td>
                                <a href="/clienti/{{ $client->id }}">
                                    {{ $client->full_name }}
                                </a>
                            </td>

                            <td>
                                {{ $client->company->name }}
                            </td>

                            <td>
                                {{ ucfirst($client->preferred_channel) }}
                            </td>

                            <td>

                                @if ($client->preferred_channel === 'email')
                                    {{ $client->email }}
                                @elseif($client->preferred_channel === 'phone')
                                    {{ $client->phone }}
                                @else
                                    -
                                @endif

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
