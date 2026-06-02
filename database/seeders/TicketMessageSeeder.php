<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TicketMessage;


class TicketMessageSeeder extends Seeder
{
    public function run(): void
    {
        // Ticket #1 - VPN non funzionante

        TicketMessage::create([
            'ticket_id' => 1,
            'message' => 'Cliente segnala impossibilità di collegarsi alla VPN aziendale.'
        ]);

        TicketMessage::create([
            'ticket_id' => 1,
            'message' => 'Operatore ha preso in carico il ticket.'
        ]);

        TicketMessage::create([
            'ticket_id' => 1,
            'message' => 'Verifiche in corso sulla configurazione VPN.'
        ]);

        // Ticket #2 - Accesso CRM negato

        TicketMessage::create([
            'ticket_id' => 2,
            'message' => 'Utente impossibilitato ad accedere al CRM.'
        ]);

        TicketMessage::create([
            'ticket_id' => 2,
            'message' => 'Password reimpostata dall\'operatore.'
        ]);

        TicketMessage::create([
            'ticket_id' => 2,
            'message' => 'Accesso verificato e ticket chiuso.'
        ]);

        // Ticket #3 - Stampante offline

        TicketMessage::create([
            'ticket_id' => 3,
            'message' => 'Stampante non raggiungibile dalla rete.'
        ]);

        TicketMessage::create([
            'ticket_id' => 3,
            'message' => 'Verifica connessione in corso.'
        ]);

        // Ticket #4 - Telefono VoIP non registrato

        TicketMessage::create([
            'ticket_id' => 4,
            'message' => 'Telefono VoIP risulta non registrato sul centralino.'
        ]);

        TicketMessage::create([
            'ticket_id' => 4,
            'message' => 'Controllata la configurazione del dispositivo.'
        ]);

        // Ticket #5 - Postazione lenta

        TicketMessage::create([
            'ticket_id' => 5,
            'message' => 'Segnalati rallentamenti durante l\'utilizzo delle applicazioni.'
        ]);

        TicketMessage::create([
            'ticket_id' => 5,
            'message' => 'Pulizia file temporanei e aggiornamenti completati.'
        ]);

        TicketMessage::create([
            'ticket_id' => 5,
            'message' => 'Prestazioni tornate nella norma. Ticket chiuso.'
        ]);

        // Ticket #6 - Errore sincronizzazione email

        TicketMessage::create([
            'ticket_id' => 6,
            'message' => 'Errore durante la sincronizzazione della casella email.'
        ]);

        TicketMessage::create([
            'ticket_id' => 6,
            'message' => 'Richieste ulteriori informazioni al cliente.'
        ]);

        TicketMessage::create([
            'ticket_id' => 6,
            'message' => 'Nessuna risposta ricevuta. Ticket archiviato.'
        ]);
    }
}
