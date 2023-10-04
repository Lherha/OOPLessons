<?php
/**
 * This file includes a database class and displays employee data using PHP and HTML.
 *
 * PHP version 7.0
 *
 * @category CRUD
 * @package  EmployeeManagement
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design 
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */

include 'db_class.php';

/**
 * Create an instance of the Database class.
 *
 * @var Database
 */
$db = new Database();

/**
 * Connect to the database.
 *
 * @var PDO
 */
$con = $db->connect();

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
      <button class="btn btn-primary my-5"> <a href="input.php" class="text-light">Add Employee</a>
      </button>
      <table class="table">

        <thead>
          <tr>
            <th scope="col">Employee Id</th>
            <th scope="col">Full name</th>
            <th scope="col">Position</th>
            <th scope="col">Salary</th>
            <th scope="col">Age</th>
          </tr>
        </thead>

        <tbody>
        <?php
          $sql = "SELECT * FROM `employee`";

          // Execute the SQL query using the connection
          $result = $con->query($sql);

          if ($result) {
              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                  $employee_id = $row['id'];
                  $full_name = $row['fullname'];
                  $position = $row['position']; // corrected typo
                  $salary = $row['salary'];
                  $age = $row['age'];

                  echo '<tr>
                      <td>' . $employee_id . '</td>
                      <td>' . $full_name . '</td>
                      <td>' . $position . '</td>
                      <td>' . $salary . '</td>
                      <td>' . $age . '</td>
                      <td>
                          <button class="btn btn-primary"><a href="update.php?updateid=' . $employee_id . '" class="text-light">Update</a></button>
                          <button class="btn btn-danger"><a href="delete.php?deleteid=' . $employee_id . '" class="text-light">Delete</a></button>
                      </td>
                  </tr>';
              }
          }

          // Close the database connection
          $db->closeConnection();
        ?>

        </tbody>
      </table>
    </div>
  </section>

</body>

</html>
