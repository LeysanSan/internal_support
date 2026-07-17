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

            <li class="breadcrumb-item">
                <a href="/workplaces/1">WP-001</a>
            </li>

            <li class="breadcrumb-item active">
                Apparecchiature
            </li>
        </ol>
    </nav>

    <h1 class="mb-1">
        <i class="bi bi-hdd-network text-primary"></i>
        Apparecchiature
    </h1>

    <p class="text-muted mb-4">
        Dispositivi assegnati al Workplace WP-001
    </p>

    <div class="row g-4">

        <!-- LEFT FILTER -->

        <div class="col-lg-3">

            <div class="list-group shadow-sm">

                <button class="list-group-item list-group-item-action active filter-btn" data-category="all">
                    📋 Tutti
                </button>

                <button class="list-group-item list-group-item-action filter-btn" data-category="PC">
                    💻 PC
                </button>

                <button class="list-group-item list-group-item-action filter-btn" data-category="Monitor">
                    🖥 Monitor
                </button>

                <button class="list-group-item list-group-item-action filter-btn" data-category="Stampante">
                    🖨 Stampanti
                </button>

                <button class="list-group-item list-group-item-action filter-btn" data-category="Telefono">
                    ☎ Telefoni
                </button>

                <button class="list-group-item list-group-item-action filter-btn" data-category="Network">
                    🌐 Network
                </button>

                <button class="list-group-item list-group-item-action filter-btn" data-category="Server">
                    🖥 Server
                </button>

            </div>

        </div>

        <!-- TABLE -->

        <div class="col-lg-9">

            <div class="card shadow-sm">

                <div class="card-header">
                    Elenco dispositivi
                </div>

                <div class="card-body p-0">

                    <table class="table table-hover mb-0">

                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Nome</th>
                                <th>Modello</th>
                                <th>Seriale</th>
                                <th>Stato</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr data-category="PC">
                                <td>💻 PC</td>
                                <td>PC-MROSSI</td>
                                <td>Dell Optiplex 7010</td>
                                <td>DL123456</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>

                            <tr data-category="Monitor">
                                <td>🖥 Monitor</td>
                                <td>Dell 24"</td>
                                <td>P2422H</td>
                                <td>MN876543</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>

                            <tr data-category="Stampante">
                                <td>🖨 Stampante</td>
                                <td>HP LaserJet</td>
                                <td>M404dn</td>
                                <td>HP998877</td>
                                <td><span class="badge bg-warning text-dark">Attenzione</span></td>
                            </tr>

                            <tr data-category="Telefono">
                                <td>☎ Telefono</td>
                                <td>Cisco IP Phone</td>
                                <td>8841</td>
                                <td>CS554433</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>

                            <tr data-category="Network">
                                <td>🌐 Switch</td>
                                <td>Cisco Catalyst</td>
                                <td>2960-X</td>
                                <td>NW334455</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>

                            <tr data-category="Server">
                                <td>🖥 Server</td>
                                <td>SRV-01</td>
                                <td>PowerEdge R650</td>
                                <td>SV998877</td>
                                <td><span class="badge bg-success">Online</span></td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const buttons = document.querySelectorAll('.filter-btn');
            const rows = document.querySelectorAll('tbody tr');

            buttons.forEach(button => {

                button.addEventListener('click', function() {

                    buttons.forEach(btn => btn.classList.remove('active'));

                    this.classList.add('active');

                    const category = this.dataset.category;

                    rows.forEach(row => {

                        if (category === 'all' || row.dataset.category === category) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }

                    });

                });

            });

        });
    </script>
@endsection
