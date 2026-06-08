<h1>Aziende</h1>

@extends('layouts.app')

@section('content')
    <h1>Aziende</h1>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
