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
            overflow-x: hidden;
            margin: 0;
        }

        #sidebar {
            transition: all 0.3s;
        }

        #sidebar.show {
            transform: translateX(0);
        }

        #sidebar.collapsed {
            display: none;
        }

        .toggle-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1030;
        }

        .sidebar {
            background-color: #f8f9fa;
            height: 100vh;
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php
    $current_page = basename($_SERVER['REQUEST_URI']);
    $base_url = "http://localhost:81/ehms/";
    ?>

    <nav class="col-md-3 col-lg-2 sidebar" id="sidebar">
        <div class="profile">
            <img src="https://via.placeholder.com/50" alt="Admin Image">
            <h5>Admin Admin</h5>
        </div>
        <div class="menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'text.php') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>text.php" aria-current="<?php echo ($current_page == 'text.php') ? 'page' : ''; ?>">
                        <i class="bi bi-display"></i> <span>Kryefaqja</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'PacientiPage.php') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>Pacienti/PacientiPage.php" aria-current="<?php echo ($current_page == 'PacientiPage.php') ? 'page' : ''; ?>" id="pacientiLink">
                        <i class="bi bi-person"></i> <span>Pacientët</span>
                    </a>
                </li>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const pacientiLink = document.getElementById("pacientiLink");

                        if (pacientiLink) {
                            pacientiLink.addEventListener("click", function (event) {
                                console.log("Pacientët link clicked.");
                            });
                        } else {
                            console.error("Pacienti link not found.");
                        }
                    });
                </script>
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
    <a class="nav-link" href="javascript:void(0);" onclick="toggleSubmenu(this)">
        <i class="bi bi-file-earmark-text"></i> <span>Raportet</span>
        <i class="bi bi-chevron-down ms-auto submenu-toggle-icon"></i>
    </a>
    <ul class="nav flex-column submenu d-none">
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
</li>

<script>
    function toggleSubmenu(element) {
        const submenu = element.nextElementSibling;
        const icon = element.querySelector('.submenu-toggle-icon');
        
        if (submenu.classList.contains('d-none')) {
            submenu.classList.remove('d-none');
            submenu.classList.add('d-block');
            icon.classList.remove('bi-chevron-down');
            icon.classList.add('bi-chevron-up');
        } else {
            submenu.classList.remove('d-block');
            submenu.classList.add('d-none');
            icon.classList.remove('bi-chevron-up');
            icon.classList.add('bi-chevron-down');
        }
    }
</script>
<li class="nav-item">
    <a class="nav-link" href="javascript:void(0);" onclick="toggleSubmenu(this)">
        <i class="bi bi-gear"></i> <span>Konfigurimet</span>
        <i class="bi bi-chevron-down ms-auto submenu-toggle-icon"></i>
    </a>
    <ul class="nav flex-column submenu d-none">
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
</li>
<script>
    function toggleSubmenu(element) {
        const submenu = element.nextElementSibling;
        const icon = element.querySelector('.submenu-toggle-icon');
        
        if (submenu.classList.contains('d-none')) {
            submenu.classList.remove('d-none');
            submenu.classList.add('d-block');
            icon.classList.remove('bi-chevron-down');
            icon.classList.add('bi-chevron-up');
        } else {
            submenu.classList.remove('d-block');
            submenu.classList.add('d-none');
            icon.classList.remove('bi-chevron-up');
            icon.classList.add('bi-chevron-down');
        }
    }
</script>



            </ul>
        </div>

        <button class="btn btn-primary">Manual</button>
        <button class="btn btn-success">Shkyçu</button>
    </nav>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
