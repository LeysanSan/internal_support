<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
    'company_id' => 1,
    'client_id' => 1,
    'title' => 'VPN non funzionante',
    'description' => 'Impossibile collegarsi alla rete aziendale.',
    'status' => 'open',
    'priority' => 'high',
]);
Ticket::create([
    'company_id' => 2,
    'client_id' => 2,
    'title' => 'Accesso CRM negato',
    'description' => '',
    'status' => 'closed',
    'priority' => 'high',
]);
Ticket::create([
    'company_id' => 3,
    'client_id' => 1,
    'title' => 'Stampante offline',
    'description' => '',
    'status' => 'in_progress',
    'priority' => 'medium',
]);

Ticket::create([
    'company_id' => 1,
    'client_id' => 3,
    'title' => 'Telefono VoIP non registrato',
    'description' => '',
    'status' => 'in_progress',
    'priority' => 'high',
]);
Ticket::create([
    'company_id' => 2,
    'client_id' => 2,
    'title' => 'Postazione lenta',
    'description' => '',
    'status' => 'closed',
    'priority' => 'medium',
]);
Ticket::create([
    'company_id' => 3,
    'client_id' => 1,
    'title' => 'Errore sincronizzazione email',
    'description' => '',
    'status' => 'lost',
    'priority' => 'low',
]);

    }
}
