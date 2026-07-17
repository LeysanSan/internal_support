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

            <li class="breadcrumb-item">
                <a href="/sites/1">Palermo</a>
            </li>

            <li class="breadcrumb-item">
                <a href="/offices/1">Marketing</a>
            </li>

            <li class="breadcrumb-item active">
                WP-001
            </li>
        </ol>
    </nav>

    <h1 class="mb-1">
        <i class="bi bi-pc-display text-primary"></i>
        Workplace WP-001
    </h1>

    <p class="text-muted mb-4">
        Postazione assegnata a Mario Rossi
    </p>

    <div class="row g-4">

        <!-- LEFT COLUMN -->

        <div class="col-lg-8">

            <div class="card shadow-sm mb-4">

                <div class="card-header">
                    👤 Informazioni utente
                </div>

                <div class="card-body">

                    <p><strong>Nome:</strong> Mario Rossi</p>

                    <p><strong>Reparto:</strong> Marketing</p>

                    <p><strong>Email:</strong> mario.rossi@azienda.it</p>

                    <p><strong>Telefono:</strong> +39 091123456</p>

                </div>

            </div>

            <div class="card shadow-sm">

                <div class="card-header">
                    💻 Dispositivi assegnati
                </div>

                <div class="list-group list-group-flush">

                    <a href="/equipment/1" class="list-group-item list-group-item-action">
                        💻 Dell Optiplex 7010
                    </a>

                    <a href="/equipment/2" class="list-group-item list-group-item-action">
                        🖥 Dell Monitor 24"
                    </a>

                    <a href="/equipment/3" class="list-group-item list-group-item-action">
                        🖨 HP LaserJet Pro
                    </a>

                    <a href="/equipment/4" class="list-group-item list-group-item-action">
                        ☎ Cisco IP Phone
                    </a>

                </div>

            </div>

        </div>

        <!-- RIGHT COLUMN -->

        <div class="col-lg-4">

            <div class="card shadow-sm mb-4">

                <div class="card-header">
                    🌐 Network
                </div>

                <div class="card-body">

                    <p><strong>IP:</strong> 192.168.1.45</p>

                    <p><strong>Hostname:</strong> PC-MROSSI</p>

                    <p><strong>Switch:</strong> SW-02</p>

                    <p><strong>VLAN:</strong> 15</p>

                </div>

            </div>

            <div class="card shadow-sm mb-4">

                <div class="card-header">
                    🎫 Ticket aperti
                </div>

                <div class="list-group list-group-flush">

                    <a href="/ticket/1" class="list-group-item list-group-item-action">
                        VPN non funzionante
                    </a>

                    <a href="/ticket/2" class="list-group-item list-group-item-action">
                        Stampante offline
                    </a>

                </div>

            </div>

            <div class="card shadow-sm">

                <div class="card-header">
                    ⚡ Azioni rapide
                </div>

                <div class="list-group list-group-flush">

                    <a href="/equipment" class="list-group-item list-group-item-action">
                        Apparecchiature
                    </a>

                    <a href="/tickets" class="list-group-item list-group-item-action">
                        Tutti i ticket
                    </a>

                    <a href="/clienti/1" class="list-group-item list-group-item-action">
                        Scheda contatto
                    </a>

                </div>

            </div>

        </div>

    </div>
@endsection
