<?php

class Person {
    private $name;
    private $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

class Employee extends Person {
    private $employeeId;

    public function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
    }

    public function getEmployeeId() {
        return $this->employeeId;
    }
}

$employee = new Employee();
$employee->setName('John Doe');
$employee->setAge(30);
$employee->setEmployeeId(12345);

echo 'Name: ' . $employee->getName() . "\n";
echo 'Age: ' . $employee->getAge() . "\n";
echo 'Employee ID: ' . $employee->getEmployeeId() . "\n";
