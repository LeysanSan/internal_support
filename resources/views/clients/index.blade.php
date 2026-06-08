<h1>Clienti</h1>

@extends('layouts.app')

@section('content')
    <h1>Clienti</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
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

                    <td>{{ $client->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
