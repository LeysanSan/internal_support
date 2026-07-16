@extends('layouts.app')

@section('content')
    <h1 class="mb-4">
        <i class="bi bi-diagram-3-fill text-success"></i>
        Ufficio Marketing
    </h1>

    <a href="/sites/1" class="btn btn-outline-secondary btn-sm mb-4">
        ← Torna al Sito
    </a>

    <div class="row g-4">

        <div class="col-lg-8">

            <div class="card shadow-sm mb-4">

                <div class="card-header">
                    Workplace
                </div>

                <div class="list-group list-group-flush">

                    <a href="/workplaces/1" class="list-group-item list-group-item-action">
                        💻 WP-001
                    </a>

                    <a href="/workplaces/1" class="list-group-item list-group-item-action">
                        💻 WP-002
                    </a>

                    <a href="/workplaces/1" class="list-group-item list-group-item-action">
                        💻 WP-003
                    </a>

                    <a href="/workplaces/1" class="list-group-item list-group-item-action">
                        💻 WP-004
                    </a>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">

                <div class="card-header">
                    Contatti
                </div>

                <div class="list-group list-group-flush">

                    <a href="#" class="list-group-item">Mario Rossi</a>
                    <a href="#" class="list-group-item">Anna Verdi</a>
                    <a href="#" class="list-group-item">Luca Bianchi</a>

                </div>

            </div>

            <div class="card shadow-sm">

                <div class="card-header">
                    Statistiche
                </div>

                <div class="card-body">

                    <span class="badge bg-primary">4 Workplace</span>

                    <span class="badge bg-success">3 Contatti</span>

                    <span class="badge bg-danger">2 Ticket aperti</span>

                </div>

            </div>

        </div>

    </div>
@endsection
