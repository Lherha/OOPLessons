<?php
/**
 * Script to handle employee deletion from the database.
 *
 * This script connects to the database, processes a deletion request,
 * and displays appropriate messages based on the outcome of the deletion.
 *
 * @file delete.php
 * @author Your Name
 * @version 1.0
 */

include 'db_class.php';

// Create an instance of the Database class
$db = new Database();

// Connect to the database
$con = $db->connect();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['deleteid'])) {
        $employee_id = $_GET['deleteid'];

        // Perform the SQL deletion
        $sqlDelete = "DELETE FROM `employee` WHERE id=$employee_id";
        $resultDelete = $con->exec($sqlDelete);

        if ($resultDelete !== false) {
            echo "Employee deleted successfully";
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.php";
                    }, 3000); // 3 seconds
                  </script>';
        } else {
            echo "Error deleting employee: " . $con->errorInfo()[2];
        }
    }
}

// Close the database connection
$db->closeConnection();
?>
