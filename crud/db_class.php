<?php
/**
 * Class Database
 *
 * Represents a database connection and provides methods for connecting and closing the connection.
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design 
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
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
     * @return PDO|null
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
