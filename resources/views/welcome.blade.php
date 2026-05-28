<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Portal</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }

        .sidebar {
            height: 100vh;
            background: #212529;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 10px 0;
        }

        .sidebar a:hover {
            color: white;
        }

        .card {
            border: none;
            border-radius: 14px;
        }

        .topbar {
            background: white;
            padding: 15px 25px;
            border-radius: 14px;
        }

        .status-open {
            color: green;
            font-weight: bold;
        }

        .status-critical {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h4 class="mb-4">Support Portal</h4>

                <a href="#">Dashboard</a>
                <a href="#">Tickets</a>
                <a href="#">Clients</a>
                <a href="#">Monitoring</a>
                <a href="#">Knowledge Base</a>
                <a href="#">Statistics</a>
                <a href="#">Settings</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">

                <!-- Topbar -->
                <div class="topbar d-flex justify-content-between align-items-center mb-4 shadow-sm">
                    <h4 class="mb-0">Dashboard</h4>

                    <div>
                        <span class="me-3">Admin</span>
                    </div>
                </div>

                <!-- Stats -->
                <div class="row g-4 mb-4">

                    <div class="col-md-3">
                        <div class="card shadow-sm p-3">
                            <h6>Open Tickets</h6>
                            <h2>14</h2>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm p-3">
                            <h6>Critical Alerts</h6>
                            <h2>3</h2>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-sm p-3">
                            <h6>Clients Online</h6>
                            <h2>27</h2>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <a href="/tasks" class="text-decoration-none text-dark">
                            <div class="card shadow-sm p-3">
                                <h6>Pending Tasks</h6>
                                <h2>5</h2>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="row">

                    <!-- Tickets Table -->
                    <div class="col-md-8 mb-4">
                        <div class="card shadow-sm p-4">
                            <h5 class="mb-4">Active Tickets</h5>

                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client</th>
                                        <th>Issue</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>#204</td>
                                        <td>TrinityInc</td>
                                        <td>Email server issue</td>
                                        <td class="status-open">Open</td>
                                    </tr>

                                    <tr>
                                        <td>#198</td>
                                        <td>RogaAndCopita</td>
                                        <td>VPN access problem</td>
                                        <td class="status-open">Open</td>
                                    </tr>

                                    <tr>
                                        <td>#193</td>
                                        <td>KorbenDallas</td>
                                        <td>Backup failure</td>
                                        <td class="status-open">In Progress</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Alerts -->
                    <div class="col-md-4">
                        <div class="card shadow-sm p-4">
                            <h5 class="mb-4">Critical Alerts</h5>

                            <div class="mb-3">
                                <p class="mb-1 fw-bold">Database Server Down</p>
                                <small class="status-critical">Critical</small>
                            </div>

                            <div class="mb-3">
                                <p class="mb-1 fw-bold">SSL Certificate Expiring</p>
                                <small class="text-warning">Warning</small>
                            </div>

                            <div>
                                <p class="mb-1 fw-bold">VPN Node Offline</p>
                                <small class="status-critical">Critical</small>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>
