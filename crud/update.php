<?php
/**
 * Employee CRUD using OOP.
 *
 * This script handles editing an employee's details in the database using OOP.
 *
 * PHP version 7.0 and above
 *
 * @category   PHP
 * @package    Employee_CRUD
 * @author     Your Name
 * @license    MIT License
 * @link       https://example.com/
 */

include 'db_class.php';
include 'Employee.php'; // Include the Employee class

// Create an instance of the Database class
$db = new Database();

// Connect to the database
$con = $db->connect();

$employee_id = isset($_GET['updateid']) ? $_GET['updateid'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    // Perform the SQL update
    $sqlUpdate = "UPDATE `employee` SET position='$position', salary=$salary WHERE id=$employee_id";
    $resultUpdate = $con->exec($sqlUpdate);

    if ($resultUpdate !== false) {
        echo "Employee updated successfully";
        echo '<script>
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 3000); // 3 seconds
              </script>';
    } else {
        echo "Error updating employee: " . $con->errorInfo()[2];
    }
} else {
    // Fetch the employee information based on the provided employee_id
    $sql = "SELECT * FROM `employee` WHERE id=$employee_id";
    $result = $con->query($sql);

    if ($result) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $fullname = $row['fullname'];
            $position = $row['position'];
            $salary = $row['salary'];
            $age = $row['age'];
        } else {
            echo "Employee not found.";
            exit();
        }
    } else {
        echo "Error fetching employee details: " . $con->errorInfo()[2];
        exit();
    }
}

// Close the database connection
$db->closeConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>OOP Employee CRUD</title>
</head>

<body style="display:flex; width:100vw; justify-content: center;">

    <section style="width: 50%;">
        <div class="container">
            <h2 class='mt-3'>Edit Employee</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="employee_id">Employee ID:</label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php if(isset($fullname)) echo $fullname; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" value="<?php if(isset($position)) echo $position; ?>">
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control" id="salary" name="salary" value="<?php if(isset($salary)) echo $salary; ?>">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?php if(isset($age)) echo $age; ?>" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

</body>

</html>
