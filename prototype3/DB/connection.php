<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'projet2-prototype');

class DatabaseConnection
{
    private $conn;

    public function __construct()
    {
        // Create a new MySQLi connection
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        // Check for connection errors
        if ($this->conn->connect_error) {
            die("Database Connection Failed: " . $this->conn->connect_error);
        } else {
            // You can optionally echo a message here if the connection is successful.
            // echo "Database Connection Successful";
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

$dbConnection = new DatabaseConnection();

// Get the database connection
$conn = $dbConnection->getConnection();

?>
