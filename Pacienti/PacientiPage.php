<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHMS</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../index.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <style>
        /* Style adjustments for button container */
        .btn-container {
            display: flex;
            align-items: center;
            gap: 10px;
            /* Space between buttons */
        }

        /* Align table entries center */
        #patientsTable th,
        #patientsTable td {
            text-align: center;
            vertical-align: middle;
        }

        h5 {
            margin: 15px;
            padding-top: 15px;
            color: #009688;
        }


    </style>
</head>

<body>
    <div class="container-fluid" id="main">
        <button class="btn btn-primary toggle-btn" id="sidebarToggle"><i class="bi bi-list"></i></button>

        <div class="row" id="row">
            <!-- Sidebar -->
            <?php include "../sidebar.php"; ?>
            <div class="col-9" id="dash">
                <div class="pacientet">
                    <h5>Pacientët</h5>
                    <div id="butons">
                        <button id="shto" class="btn btn-primary ml-3" data-toggle="modal"
                            data-target="#myModal"><span><i class="bi bi-plus-lg"></i></span> Shto</button>
                        <button id="edito" class="btn btn-secondary ml-2"><span><i
                                    class="bi bi-pencil-square"></i></span> Edito</button>
                        <button id="del" class="btn btn-danger ml-2"><span><i class="bi bi-trash"></i></span>
                            Fshij</button>
                    </div>
                </div>

                <!-- Button Container Above Table -->
                <div class="btn-container mb-3">
                    <div>
                        <button id="btnExcel" class="btn btn-success mr-2">Excel</button>
                        <button id="btnCSV" class="btn btn-success mr-2">CSV</button>
                        <button id="btnPDF" class="btn btn-success">PDF</button>
                    </div>
                </div>

                <!-- DataTables Structure -->
                <div style="overflow: auto; max-height: 400px;">
                    <table id="patientsTable" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>KlientID</th>
                                <th>Numri Personal</th>
                                <th>Emri</th>
                                <th>Mbiemri</th>
                                <th>Emri Prindit</th>
                                <th>Gjinia</th>
                                <th>Datëlindja</th>
                                <th>Vendbanimi</th>
                            </tr>
                        </thead>
                        <tbody id="pacienti-body">
                            <!-- Data will be populated here via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>

    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Shto Pacientin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <p>TË DHËNAT PERSONALE</p> -->
                <div class="modal-body">
                    <form id="infoForm">
                        <div class="form-row mb-3">
                            <div class="form-group col-6 col-md-6">
                                <label for="emri">Emri</label>
                                <input type="text" class="form-control" id="emri">
                            </div>
                            <div class="form-group col-6 col-md-6">
                                <label for="mbiemri">Mbiemri</label>
                                <input type="text" class="form-control" id="mbiemri">
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="form-group col-6 col-md-6">
                                <label for="emri_prindit">Emri i Prindit</label>
                                <input type="text" class="form-control" id="emri_prindit">
                            </div>
                            <div class="form-group  col-6 col-md-6">
                                <label for="numri_personal">Numri Personal</label>
                                <input type="text" class="form-control" id="numri_personal">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-6 col-md-6">
                                <label for="gjina">Gjina</label>
                                <select class="form-control" id="gjina" required>
                                    <option value="" disabled selected>Select Gjina</option>
                                    <option value="M">Mashkull</option>
                                    <option value="F">Femër</option>
                                </select>
                            </div>
                            <div class="form-group col-6  col-md-6">
                                <label for="datelindja">Datelindja</label>
                                <input type="date" class="form-control" id="datelindja" required>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-12 col-md-12">
                                <label for="Adresa">Adresa</label>
                                <input type="text" class="form-control" id="Adresa">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-6 col-md-4">
                                <label for="Qyteti">Qyteti</label>
                                <input type="text" class="form-control" id="Qyteti">
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <label for="Shteti">Shteti</label>
                                <input type="text" class="form-control" id="Shteti">
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label for="Numri_telefonit">Numri telefonit</label>
                                <input type="text" class="form-control" id="Numri_telefonit">
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-12 col-md-12">
                                <label for="Email_Adresa">Email Adresa</label>
                                <input type="text" class="form-control" id="Email_Adresa">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



 <script src="pacienti.js"></script>

</body>

</html>