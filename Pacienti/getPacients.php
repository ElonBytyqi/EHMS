<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../Database.php";

// Create an instance of Database
$db = new Database();

// Get the database connection
$conn = $db->connectDB();

// Example query
$sql = "SELECT * FROM pacienti";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) { {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

}

//echo ($data);
echo json_encode($data);


// Close the connection when done
$result->close();
?>