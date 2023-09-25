<?php

/**
 * Make the properties in the 
 * Person and Employee classes private
 *  and access them through public methods
 */

class Person
{
  private $name;
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
}

$personOne = new Person('Ajao BJ', 27);

echo $personOne->getName() . '<br>';
echo $personOne->getAge() . '<br>';


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


$employeeOne = new Employee('Math Bolaji Doe', 23, 'UI/UX designer', 200000);

echo $employeeOne->getName() . '<br>';
echo $employeeOne->getPosition() . '<br>';
echo $employeeOne->getSalary();
