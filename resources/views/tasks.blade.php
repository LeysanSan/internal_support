<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }

        .card {
            border: none;
            border-radius: 14px;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Pending Tasks</h2>

            <a href="/" class="btn btn-dark">
                Back to Dashboard
            </a>
        </div>

        <div class="card shadow-sm p-4">

            <table class="table align-middle">

                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Client</th>
                        <th>Priority</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task['title'] }}</td>
                            <td>{{ $task['client'] }}</td>
                            <td>{{ $task['priority'] }}</td>
                            <td>{{ $task['status'] }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>
