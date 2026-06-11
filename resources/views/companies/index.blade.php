@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Gestione Aziende</h1>

    <div class="row">

        @foreach ($companies as $company)
            <div class="col-md-4 mb-3">

                <a href="/aziende/{{ $company->id }}" class="text-decoration-none text-dark">

                    <div class="card shadow-sm card-hover h-100">

                        <div class="card-body">

                            <h5>{{ $company->name }}</h5>

                            <span class="badge bg-danger">
                                {{ $company->open_tickets_count }}
                                ticket aperti
                            </span>

                        </div>

                    </div>

                </a>

            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $companies->links() }}
    </div>
@endsection
