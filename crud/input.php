<?php
include 'db_class.php';
include 'Employee.php';

// Create an instance of the Database class
$db = new Database();

// Connect to the database
$con = $db->connect();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming $_POST values are set and non-empty
    $fullname = $_POST['fullname'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];

    // Create an instance of the Employee class with valid arguments
    $employee = new Employee($fullname, $age, $position, $salary);

    // Add employee to the database
    $employee->addToDatabase($con);
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

    <section style="width: 80%;">
        <div class="container">
            <h2 class='mt-3'>Input Details</h2>

            <form method="POST">
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname"><br>

                <label for="position">Position:</label><br>
                <input type="text" id="position" name="position"><br>

                <label for="salary">Salary:</label><br>
                <input type="text" id="salary" name="salary"><br>

                <label for="age">Age:</label><br>
                <input type="text" id="age" name="age"><br><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

</body>

</html>
