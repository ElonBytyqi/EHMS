
<?php
class Database {
    private $servername = "localhost"; // Adjust if needed
    private $username = "root";
    private $password = "Loni2002.";
    private $dbname = "EHMS";
    private $conn;

    public function connectDB() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        

        return $this->conn;
    }
}

?>