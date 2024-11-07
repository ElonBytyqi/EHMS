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


    <!-- Bootstrap JS and JavaScript to load sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   

</body>
</html>

    </div>

 
</body>
</html>
