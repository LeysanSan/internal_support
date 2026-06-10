<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;


Route::get('/aziende', [CompanyController::class, 'index']);
Route::get('/aziende/{id}', [CompanyController::class, 'show']);
Route::get('/tickets', [TicketController::class, 'index']);
Route::get('/ticket/{id}', [TicketController::class, 'show']);
Route::get('/clienti', [ClientController::class, 'index']);
Route::get('/clienti/{id}', [ClientController::class, 'show']);
Route::get('/', [DashboardController::class, 'index']);
Route::get('/tickets/status/{status}', [TicketController::class, 'byStatus']);

//Route::get('/', function () {
    return view('welcome');
//});



Route::get('/tasks', function () {

    $tasks = [
        [
            'title' => 'Update SSL certificate',
            'client' => 'TrinityInc',
            'priority' => 'High',
            'status' => 'Pending',
        ],
        [
            'title' => 'Investigate VPN outage',
            'client' => 'RogaAndCopita',
            'priority' => 'Critical',
            'status' => 'In Progress',
        ],
        [
            'title' => 'Server backup verification',
            'client' => 'KorbenDallas',
            'priority' => 'Medium',
            'status' => 'Pending',
        ],
    ];

    return view('tasks', compact('tasks'));
});