<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHMS</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            overflow-x: hidden; /* Prevent horizontal scrollbar */
            margin: 0;
        }

        #sidebar {
            transition: all 0.3s;
        }

        #sidebar.show {
            transform: translateX(0); /* Show the sidebar */
        }

        #sidebar.collapsed {
            display: none;
        }

        .toggle-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1030; /* Ensure it stays above other elements */
        }

        /* Optional styling for the sidebar */
        .sidebar {
            background-color: #f8f9fa; /* Light background for sidebar */
            height: 100vh; /* Full height */
            padding: 10px; /* Padding */
   
        }
    
    </style>
</head>

<body>

    <div class="container-fluid" id="main">
        <button class="btn btn-primary toggle-btn" id="sidebarToggle"><i class="bi bi-list"></i></button>

        <div class="row" id="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar" id="sidebar">
                <div class="profile">
                    <img src="https://via.placeholder.com/50" alt="Admin Image">
                    <h5>Admin Admin</h5>
                </div>
                <div class="menu">
                   <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-display"></i> <span>Kryefaqja</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person"></i> <span>Pacientët</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-calendar-event"></i> <span>Terminet</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-journal-medical"></i> <span>Vizitat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-hospital"></i> <span>Hospitalizimet</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#reportsSubmenu" role="button"
                            aria-expanded="false" aria-controls="reportsSubmenu">
                            <i class="bi bi-file-earmark-text"></i> <span>Raportet</span>
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="reportsSubmenu">
                            <ul class="nav flex-column submenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-file-earmark-medical"></i> <span>Raporti i Hospitalizimeve</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-file-earmark-person"></i> <span>Raporti i Vizitave</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-file-earmark-text"></i> <span>Raporti i Përgjithshëm</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-credit-card-2-back"></i> <span>Kartela e Pacientit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="konfigurimet">
                        <a class="nav-link" data-bs-toggle="collapse" href="#configSubmenu" role="button"
                            aria-expanded="false" aria-controls="configSubmenu">
                            <i class="bi bi-gear"></i> <span>Konfigurimet</span>
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="configSubmenu">
                            <ul class="nav flex-column submenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Përdoruesit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Doktorët</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Orari i doktorëve</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Sallat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Sëmundjet</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Klinikat</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-calendar-event"></i> <span>Repartet</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-person"></i> <span>Profili</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="bi bi-person"></i> <span>Konfigurimi i sistemit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>  
                </div>
               
                <button class="btn btn-primary">Manual</button>
                <button class="btn btn-success">Shkyçu</button>
            </nav>

            <!-- Main Content -->
            <div class="col-9" id="dash">
                <h4>Dashboard</h4>
                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-outline-danger me-2">Të GJITHA</button>
                    <button class="btn btn-danger">SOT</button>
                </div>

                <div class="row g-3" id="card">
                    <div class="col-md-3 col-6"> <!-- Adjust for smaller screens -->
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">TERMINTET SOT</h5>
                                <div class="icon-circle bg-gradient">
                                    <i class="bi bi-calendar"></i>
                                </div>
                                <p class="card-text">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6"> <!-- Adjust for smaller screens -->
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">VIZITAT SOT</h5>
                                <div class="icon-circle bg-gradient">
                                    <i class="bi bi-camera-video"></i>
                                </div>
                                <p class="card-text">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6"> <!-- Adjust for smaller screens -->
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">HOSPITALIZIMET SOT</h5>
                                <div class="icon-circle bg-gradient">
                                    <i class="bi bi-hospital"></i>
                                </div>
                                <p class="card-text">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6"> <!-- Adjust for smaller screens -->
                        <div class="card text-center ">
                            <div class="card-body">
                                <h5 class="card-title text-center">PACIENTËT E KONTROLLUAR</h5>
                                <div class="icon-circle bg-gradient">
                                    <i class="bi bi-person-check"></i>
                                </div>
                                <p class="card-text">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.querySelector('.toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('dash');

        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('show');
            content.classList.toggle('sidebar-open'); // Adjust margin or padding if needed
        });
    </script>
</body>
</html>
