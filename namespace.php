<?php

/**
 * Organize the classes into appropriate namespaces.
 */

// namespace ;

class Person
{
    public $name;
    public $age;

    // Constructor to initialize properties
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($newAge)
    {
        $this->age = $newAge;
    }

}

class Employee extends Person
{
    private $position;
    private $salary;

    public function __construct($employee_name, $employee_age, $position, $salary)
    {
        // Call the parent class constructor
        parent::__construct($employee_name, $employee_age);

        // add additional properties specific to Employee
        $this->position = $position;
        $this->salary = $salary;
    }

    // Override the getName() method from the Person class
    public function getName()
    {
        return 'Employee: ' . $this->name;  // Customized implementation for employees
    }

    public function getPostion()
    {
        return $this->position;
    }

    public function setPostion($newPosition)
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

}

$employee1 = new Employee('Mueez Bolaji', 24, 'Software Developer', 200000);
$employee2 = new Employee('Mat Isac', 34, 'Fullstack Developer', 400000);


echo 'I am a new ' . $employee1->getName() . ', I am a ' . $employee1->getPostion() . ' and earn ' . 'N' . $employee1->getSalary() . '<br>' . '<br>';
echo 'I am a new ' . $employee2->getName() . ', I am a ' . $employee2->getPostion() . ' and earn ' . 'N' . $employee2->getSalary();
