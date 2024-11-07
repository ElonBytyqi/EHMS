$(document).ready(function () {
    // Initialize DataTable
    const table = $('#patientsTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Export to Excel',
                className: 'd-none',
            },
            {
                extend: 'csvHtml5',
                text: 'Export to CSV',
                className: 'd-none',
            },
            {
                extend: 'pdfHtml5',
                text: 'Export to PDF',
                className: 'd-none',
            }
        ],
        "pageLength": 10,
        "responsive": true,
        "language": {
            "search": "Search:",
            "lengthMenu": "Show _MENU_ entries",
            "paginate": {
                "previous": "Previous",
                "next": "Next"
            }
        }
    });

    // Fetch patient data using AJAX
    $.ajax({
        url: 'getPacients.php', // Your PHP endpoint to get data
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            console.log(response); // Display the full response in the console

            // Clear existing data in the table body
            $('#pacienti-body').empty();

            // Check if response is an array
            if (Array.isArray(response)) {
                // Loop through the response array and create table rows
                response.forEach(pacient => {
                    // Create a new row for each patient
                    const row = `
                    <tr id="patient-${pacient.pacienti_id}" data-id="${pacient.pacienti_id}">
                        <td class="table-cell">${pacient.pacienti_id}</td>
                        <td class="table-cell">${pacient.nr_personal}</td>
                        <td class="table-cell">${pacient.emri}</td>
                        <td class="table-cell">${pacient.mbiemri}</td>
                        <td class="table-cell">${pacient.emri_prindit}</td>
                        <td class="table-cell">${pacient.gjinia}</td>
                        <td class="table-cell">${pacient.datelindja}</td>
                        <td class="table-cell">${pacient.adresa}</td>
                    </tr>
                `;

                    // Append the new row to the tbody
                    $('#pacienti-body').append(row);
                });

                // Redraw the DataTable to include the new data
                table.rows.add($('#pacienti-body tr')).draw();
            } else {
                console.log("No data available or not in expected format.");
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error); // Log error details
        }
    });

    // Custom buttons triggering DataTables buttons
    $('#btnExcel').on('click', function () {
        table.button(0).trigger(); // Trigger the Excel button
    });

    $('#btnCSV').on('click', function () {
        table.button(1).trigger(); // Trigger the CSV button
    });

    $('#btnPDF').on('click', function () {
        table.button(2).trigger(); // Trigger the PDF button
    });

    // Row selection using class toggling
    $('#patientsTable').on('click', 'tr[data-id]', function() {
        console.log('Row clicked'); // Log when a row is clicked
    
        // Clear previous selections
        $('#pacienti-body tr').removeClass('selected').css('background-color', '');
    
        // Highlight the clicked row
        $(this).addClass('selected').css('background-color', '#009688'); // Set background color
    
        // Get the patient ID
        var pacientId = $(this).data('id');
        console.log('Pacienti ID:', pacientId);
    });
    
});
