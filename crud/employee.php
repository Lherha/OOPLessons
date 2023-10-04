<?php

/**
 * Class Employee
 * Represents an employee extending the Person class.
 * @author Ajao Mueez <mueezlherha@gmail.com>
 * @copyright 2010 Ennui Design 
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
 */
include 'class.php';

class Employee extends Person
{
    /**
     * @var string The position of the employee.
     */
    private $position;

    /**
     * @var float The salary of the employee.
     */
    private $salary;

    /**
     * Employee constructor.
     *
     * @param string $employee_name The name of the employee.
     * @param int $employee_age The age of the employee.
     * @param string $position The position of the employee.
     * @param float $salary The salary of the employee.
     */
    public function __construct($employee_name, $employee_age, $position, $salary)
    {
        parent::__construct($employee_name, $employee_age);
        $this->position = $position;
        $this->salary = $salary;
    }

    /**
     * Get the position of the employee.
     *
     * @return string The position of the employee.
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the position of the employee.
     *
     * @param string $newPosition The new position to set.
     */
    public function setPosition($newPosition)
    {
        $this->position = $newPosition;
    }

    /**
     * Get the salary of the employee.
     *
     * @return float The salary of the employee.
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the salary of the employee.
     *
     * @param float $newSalary The new salary to set.
     */
    public function setSalary($newSalary)
    {
        $this->salary = $newSalary;
    }

    /**
     * Add employee data to the database.
     *
     * @param PDO $con The database connection.
     */
    public function addToDatabase($con)
    {
        $fullname = $this->getName();
        $position = $this->getPosition();
        $salary = $this->getSalary();
        $age = $this->getAge();

        // Perform the SQL insertion
        $sql = "INSERT INTO `employee` (fullname, position, salary, age) VALUES ('$fullname', '$position', $salary, $age)";
        $result = $con->exec($sql);

        if ($result !== false) {
            echo "Employee added successfully.";
            echo '<script>
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 3000); // 3 seconds
              </script>';
        } else {
            echo "Error adding employee: " . $con->errorInfo()[2];
        }
    }
}
