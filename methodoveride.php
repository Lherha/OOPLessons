<?php

/**
 * Override a method from the Person class in the Employee class
 */

class Person
{
  public $name;
  private $age;

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

  public function sendMessage()
  {
    return $this->name . ' is ' . $this->age . ' years old.';
  }
}

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


  //Override sendMessage() 
  public function sendMessage()
  {
    return $this->name . ' is a ' . $this->position;
  }
}

$personOne = new Person('Bolaji Isaac', 27);

$employeeOne = new Employee('Bolaji Isaac', 24, 'Software Developer', 200000);

echo $personOne->sendMessage() . '<br>';
echo $employeeOne->sendMessage();
