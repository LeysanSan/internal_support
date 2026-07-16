@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Dashboard</a>
            </li>

            <li class="breadcrumb-item">
                <a href="/aziende/1">Forza Napoli SRL</a>
            </li>

            <li class="breadcrumb-item active">
                Palermo
            </li>
        </ol>
    </nav>

    <h1 class="mb-1">
        <i class="bi bi-geo-alt-fill text-danger"></i>
        Palermo
    </h1>

    <p class="text-muted mb-4">
        Sito principale
    </p>

    <div class="row g-4">

        <div class="col-lg-8">

            <div class="card shadow-sm">

                <div class="card-header">
                    <i class="bi bi-building"></i>
                    Uffici
                </div>

                <div class="list-group list-group-flush">

                    <a href="/offices/1" class="list-group-item list-group-item-action">
                        📂 Marketing
                    </a>

                    <a href="/offices/2" class="list-group-item list-group-item-action">
                        📂 Customer Care
                    </a>

                    <a href="/offices/3" class="list-group-item list-group-item-action">
                        📂 Vendite
                    </a>

                    <a href="/offices/4" class="list-group-item list-group-item-action">
                        📂 Amministrazione
                    </a>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">

                <div class="card-header">
                    Statistiche
                </div>

                <div class="card-body">

                    <span class="badge bg-primary">
                        4 Uffici
                    </span>

                    <span class="badge bg-success">
                        18 Contatti
                    </span>

                    <span class="badge bg-warning text-dark">
                        25 Workplace
                    </span>

                    <span class="badge bg-danger">
                        8 Ticket aperti
                    </span>

                </div>

            </div>

            <div class="card shadow-sm">

                <div class="card-header">
                    Azioni rapide
                </div>

                <div class="list-group list-group-flush">

                    <a href="/equipment" class="list-group-item list-group-item-action">
                        💻 Apparecchiature
                    </a>

                    <a href="/tickets" class="list-group-item list-group-item-action">
                        🎫 Ticket
                    </a>

                </div>

            </div>

        </div>

    </div>
@endsection
