@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Gestione Aziende</h1>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ticket Aperti</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>

                            <td>
                                <a href="/aziende/{{ $company->id }}">
                                    {{ $company->name }}
                                </a>
                            </td>

                            <td>{{ $company->tickets_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endsection
