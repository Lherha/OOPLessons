<?php
include 'class.php';

class Employee extends Person
{
    private $position;
    private $salary;

    public function __construct($employee_name, $employee_age, $position, $salary)
    {
        parent::__construct($employee_name, $employee_age);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($newPosition)
    {
        $this->position = $newPosition;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($newSalary)
    {
        $this->salary = $newSalary;
    }

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
?>
