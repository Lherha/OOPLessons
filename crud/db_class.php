<?php
/**
 * Class Database
 *
 * Represents a database connection and provides methods for connecting and closing the connection.
 */
class Database {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    /**
     * Database constructor.
     * Sets default values for servername, username, password, and dbname.
     */
    public function __construct() {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'ooplesons';
    }

    /**
     * Establishes a connection to the database.
     *
     * @return PDO|null The PDO connection object or null if connection fails.
     */
    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Closes the database connection.
     */
    public function closeConnection() {
        $this->conn = null;
    }
}
?>
