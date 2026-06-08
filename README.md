# Internal Support Portal

Laravel-based prototype of an internal support portal for managing companies, clients, support tickets, and ticket history.

### Dashboard

* Global statistics
* Company count
* Client count
* Ticket statistics by status
* Recent tickets overview

### Companies

* Company listing
* Company details page
* Company statistics
* Related clients
* Related tickets

### Clients

* Client listing
* Client details page
* Contact information
* Connection information
* Ticket history

### Tickets

* Ticket listing
* Ticket details page
* Status tracking
* Priority tracking
* Ticket message history

### Database

* MySQL support
* Migrations
* Seeders with demo data
* Eloquent relationships

## Technology Stack

* PHP 8
* Laravel
* MySQL
* Bootstrap 5

## Database Structure

Main entities:

* Company
* Client
* Ticket
* TicketMessage

Relationships:

Company → Clients

Company → Tickets

Client → Tickets

Ticket → Messages

## Installation

Clone repository:

```bash
git clone <repository-url>
```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Configure MySQL connection in `.env`.

Generate application key:

```bash
php artisan key:generate
```

Run migrations and seed demo data:

```bash
php artisan migrate:fresh --seed
```

Start development server:

```bash
php artisan serve
```

Application will be available at:

```text
http://127.0.0.1:8000
```

## Current Routes

* `/`
* `/aziende`
* `/aziende/{id}`
* `/clienti`
* `/clienti/{id}`
* `/tickets`
* `/ticket/{id}`

## Planned Features

* SuiteCRM synchronization
* Zabbix integration
* Ticket filtering
* Authentication
* User roles (Admin / Super Admin)
* Support automation tools
* Client technical infrastructure details

## Project Status

Prototype / Proof of Concept

The current version demonstrates the application architecture, database structure, and navigation flow while awaiting SuiteCRM integration.
