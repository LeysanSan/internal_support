<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portale Assistenza</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        <div class="container-xl">

            <a class="navbar-brand" href="/">
                Portale Assistenza
            </a>

            <div class="navbar-nav ms-4">

                <a class="nav-link" href="/">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>

                <a class="nav-link" href="/aziende">
                    <i class="bi bi-buildings"></i>
                    Aziende
                </a>

                <a class="nav-link" href="/clienti">
                    <i class="bi bi-people"></i>
                    Clienti
                </a>

                <a class="nav-link" href="/tickets">
                    <i class="bi bi-ticket-detailed"></i>
                    Ticket
                </a>

            </div>

        </div>

    </nav>

    <div class="container-xl py-4">
        @yield('content')
    </div>

</body>

</html>
