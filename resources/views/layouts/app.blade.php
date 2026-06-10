<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portale Assistenza</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card-hover {
            transition: 0.2s;
        }

        .card-hover:hover {
            transform: translateY(-4px);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4 mt-4">

            <a class="navbar-brand" href="/">
                Portale Assistenza
            </a>

            <div class="navbar-nav ms-4">
                <a class="nav-link" href="/">Dashboard</a>
                <a class="nav-link" href="/aziende">Aziende</a>
                <a class="nav-link" href="/clienti">Clienti</a>
                <a class="nav-link" href="/tickets">Ticket</a>
            </div>

        </div>
    </nav>


    @yield('content')
    </div>

</body>

</html>
