<?php

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    /**
     *  helps to set name
     *  @param string $name
     *  @return string
     */
    public function setName($name) {
        return $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

class Employee extends Person {
    private $position;
    private $salary;

    public function __construct($name, $age, $position, $salary) {
        parent::__construct($name, $age);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

// Usage example:
$employee = new Employee("BJ Mueez", 24, "Manager", 50000);

echo "Name: " . $employee->getName() . "\n";
echo "Age: " . $employee->getAge() . "\n";
echo "Position: " . $employee->getPosition() . "\n";
echo "Salary: $" . $employee->getSalary() . "<br>";

$employee->setName("Mathew Isaac");
$employee->setAge(40);
$employee->setPosition("Senior Manager");
$employee->setSalary(60000);

echo "Updated Name: " . $employee->getName() . "\n";
echo "Updated Age: " . $employee->getAge() . "\n";
echo "Updated Position: " . $employee->getPosition() . "\n";
echo "Updated Salary: $" . $employee->getSalary() . "\n";
