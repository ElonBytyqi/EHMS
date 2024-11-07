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
      
    </style>
</head>

<body>

<div class="container-fluid" id="main">
        <button class="btn btn-primary toggle-btn" id="sidebarToggle"><i class="bi bi-list"></i></button>

        <div class="row" id="row">
            <!-- Sidebar -->
            
            <?php include "sidebar.php"?>

          

            <!-- Main Content -->
           
            <?php include "content.php"?>

           
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
