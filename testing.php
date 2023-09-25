<?php

// class Person {
//   // first name of person
//   var $fname;
//   // last name of person
//   var $lname;
  
//   function showName() {
//       echo "My name is: " . $this->fname . " " . $this->lname;
//   }
// }

// // creating class object
// $ajao = new Person();
// // assigning values to variables
// $ajao->fname = "Ajao";
// $ajao->lname = "Bolaji";
// // calling the method function
// $ajao->showName();

// echo "<br/>";

// // creating class object
// $matt = new Person();
// // assigning values to variables
// $matt->fname = "Matt";
// $matt->lname = "Isaac";
// // calling the method function
// $matt->showName();







class Person
{
  public $name;
  public $age;

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

  public function introduce()
  {
    return 'I am a new employee and my name is ' . $this->name . ', I am a ' . $this->getPosition() . ' and earn N' . $this->getSalary();
  }
}

class SoftwareDeveloper extends Employee
{
  public function introduce()
  {
    return parent::introduce() . ' as a Software Developer.';
  }
}

class FullstackDeveloper extends Employee
{
  public function introduce()
  {
    return parent::introduce() . ' as a Fullstack Developer.';
  }
}

$employee1 = new SoftwareDeveloper('Mueez Bolaji', 24, 'Software Developer', 200000);
$employee2 = new FullstackDeveloper('Mat Isac', 34, 'Fullstack Developer', 400000);

echo $employee1->introduce() . '<br><br>';
echo $employee2->introduce();
