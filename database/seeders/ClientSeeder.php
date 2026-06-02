<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        Client::create([
    'company_id' => 1,
    'full_name' => 'Mario Rossi',
    'phone' => '+39 333 1234567',
    'email' => 'mario.rossi@company.it',
    'preferred_channel' => 'email',
    'connection_type' => 'vpn',
]);

        Client::create([
    'company_id' => 2,
    'full_name' => 'Fabio Fabia',
    'phone' => '+39 333 1234568',
    'email' => '',
    'preferred_channel' => 'phone',
    'connection_type' => 'vpn',
]);
Client::create([
    'company_id' => 3,
    'full_name' => 'Giulia Giuliettini',
    'phone' => '+39 333 1234569',
    'email' => 'its.giulia@write.me',
    'preferred_channel' => 'email',
    'connection_type' => 'vpn',
]);
    }
}

